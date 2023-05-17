<?php
    //connect database
    function connect(){
        $conn = new mysqli('localhost', 'root', 'ht010203', 'e_project_1');
        if($conn->connect_error){
            die ("Can not connect your database". $conn->connect_error);
        }
        return $conn;
    }

    //close connect database
    function closeconnect($stmt, $conn){
        $stmt->close();
        $conn->close();
    }

    //select categories
    function selectCat(){
        $conn = connect();
        $sql = "SELECT * FROM categories WHERE deleted = 0";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select detail
    function selectDetail(){
        $conn = connect();
        $sql = "SELECT * FROM details WHERE deleted = 0";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select contact
    function selectContact(){
        $conn = connect();
        $sql = "SELECT * FROM contact WHERE deleted = 0";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select user
    function selectUser(){
        $conn = connect();
        $sql = "SELECT * FROM users WHERE deleted = 0";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select partner
    function selectPartner(){
        $conn = connect();
        $sql = "SELECT * FROM partner WHERE deleted = 0";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select detail by id
    function selectDetailByid($id_input){
        $conn = connect();
        $sql = "SELECT * FROM details where category_id = ? and deleted = 0";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $id = $id_input;
        $stmt->execute();
        $result = $stmt->get_result();
        closeconnect($stmt, $conn);
        return $result;
    }

    //select user by name
    function selectUserByName($name_input){
        $conn = connect();
        $sql = "SELECT * FROM users where username = ? and deleted = 0";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $name);
        $name = $name_input;
        $stmt->execute();
        $result = $stmt->get_result();
        closeconnect($stmt, $conn);
        return $result;
    }

    //add Category
    function addCat($name_input){
        $conn = connect();
        $sql = "INSERT INTO categories(name) VALUES(?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$name);
        $name = $name_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //add category detail
    function addDetail($name_input, $cateid_input){
        $conn = connect();
        $sql = "INSERT INTO categories_details(name, categories_id) VALUES(?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si",$name, $cateid);
        $name = $name_input;
        $cateid = $cateid_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //add description
    function addDescription($description_input, $detailId_input, $image_input){
        $conn = connect();
        $sql = "INSERT INTO description(description, cateDetail_id, image) VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis",$description, $detailId, $image);
        $description = $description_input;
        $detailId = $detailId_input;
        $image = $image_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //add contact
    function addContact($name_input, $web_input, $address_input, $email_input, $phone_input, $hotline_input){
        $conn = connect();
        $sql = "INSERT INTO contact(name, website, address, email, phone_number, hotline) VALUES(?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss",$name, $web, $address, $email, $phone, $hotline);
        $name = $name_input;
        $web = $web_input;
        $address = $address_input;
        $email = $email_input;
        $phone = $phone_input;
        $hotline = $hotline_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }
    //add user
    function addUser($name_input, $pass_input, $email_input, $address_input){
        $conn = connect();
        $sql = "INSERT INTO users(username, password, email, address) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss",$name, $pass, $email, $address);
        $name = $name_input;
        $pass = $pass_input;
        $email = $email_input;
        $address = $address_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //add admin
    function addAdmin($name_input, $pass_input, $email_input, $address_input){
        $conn = connect();
        $sql = "INSERT INTO users(username, password, role_id, email, address) VALUES(?,?,1,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss",$name, $pass, $email, $address);
        $name = $name_input;
        $pass = $pass_input;
        $email = $email_input;
        $address = $address_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //update categories
    function editCat($name_input, $id_input){
        $conn = connect();
        $sql = "UPDATE categories SET name = ?, update_at = CURRENT_TIMESTAMP WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $name, $id);
        $name = $name_input;
        $id = $id_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //update detail
    function editDetail($name_input, $cateid_input, $id_input){
        $conn = connect();
        $sql = "UPDATE categories_details SET name = ?, categories_id = ?, update_at = CURRENT_TIMESTAMP WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $name, $cateid, $id);
        $name = $name_input;
        $cateid = $cateid_input;
        $id = $id_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //update description
    function editDescription($description_input, $detailId_input, $image_input, $id_input){
        $conn = connect();
        $sql = "UPDATE description SET description = ?, cateDetail_id = ?, image = ?, update_at = CURRENT_TIMESTAMP WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $description, $detailId, $image, $id);
        $description = $description_input;
        $detailId = $detailId_input;
        $image = $image_input;
        $id = $id_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //update contact
    function editContact($name_input, $web_input, $address_input, $email_input, $phone_input, $hotline_input, $id_input){
        $conn = connect();
        $sql = "UPDATE contact SET name = ?, website = ?, address = ?, email = ?, phone_number = ?, hotline = ?, update_at = CURRENT_TIMESTAMP";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $web, $address, $email, $phone, $hotline, $id);
        $name = $name_input;
        $web = $web_input;
        $address = $address_input;
        $email = $email_input;
        $phone = $phone_input;
        $hotline = $hotline_input;
        $id = $id_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //update user
    function editUser($name_input, $pass_input, $email_input, $address_input, $id_input){
        $conn = connect();
        $sql = "UPDATE users SET username = ?, password = ?, email = ?, address = ?, update_at = CURRENT_TIMESTAMP WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $pass, $email, $address, $id);
        $name = $name_input;
        $pass = $pass_input;
        $email = $email_input;
        $address = $address_input;
        $id = $id_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //delete
    function deleteUser($id_input){
        $conn = connect();
        $sql = "UPDATE users SET update_at = CURRENT_TIMESTAMP, deleted = 1 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $id = $id_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //check user form login
    function check_user($username_input){     
        $conn = connect();
        $sql = "SELECT username, password, role_id FROM users WHERE username = ? and deleted = 0";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$username);
        $username = $username_input;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        closeconnect($stmt,$conn);
    }

    //check user form register
    function check_username($username_input){     
        $conn = connect();
        $flag = 0;
        $sql = "SELECT username FROM users WHERE username = ? and deleted = 0";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$username);
        $stmt -> execute();
        $username = $username_input;
        $result = $stmt -> get_result();
        if ($result -> num_rows > 0){
            $flag = 1;
        }
        return $flag;
        closeconnect($stmt,$conn);
    }
    function check_email($email_input){     
        $conn = connect();
        $flag = 0;
        $sql = "SELECT email FROM users WHERE email = ?  and deleted = 0";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$email);
        $email = $email_input;
        $stmt -> execute();
        $result = $stmt -> get_result();
        if ($result -> num_rows > 0){
            $flag = 1;
        }
        return $flag;
        closeconnect($stmt,$conn);
    }
    
    //validate email
    function is_email($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }

    //start session
    session_start();
?>