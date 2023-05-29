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
        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select categories undelete
    function selectCatUnDe(){
        $conn = connect();
        $sql = "SELECT * FROM categories WHERE deleted = 0";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select category by id
    function selectCatByid($id_input){
        $conn = connect();
        $sql = "SELECT * FROM categories where id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $id = $id_input;
        $stmt->execute();
        $result = $stmt->get_result();
        closeconnect($stmt, $conn);
        return $result;
    }

    //select detail
    function selectDetail(){
        $conn = connect();
        $sql = "SELECT * FROM details";
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

    //select about us
    function selectAboutUs(){
        $conn = connect();
        $sql = "SELECT * FROM about_us WHERE deleted = 0";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    // select social
    function selectContact(){
        $conn = connect();
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select user
    function selectUser(){
        $conn = connect();
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    //select role by id
    function selectRoleById($id_input){
        $conn = connect();
        $sql = "SELECT * FROM role where id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $id = $id_input;
        $stmt->execute();
        $result = $stmt->get_result();
        closeconnect($stmt, $conn);
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

    //update about us
    function editAboutUs($name_input, $web_input, $email_input, $address_input, $hotline_input){
        $conn = connect();
        $sql = "UPDATE about_us SET name = ?, website = ?, email = ?, address = ?, hotline = ?, update_at = CURRENT_TIMESTAMP";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $web, $email, $address, $phone, $hotline);
        $name = $name_input;
        $web = $web_input;
        $address = $address_input;
        $email = $email_input;
        $phone = $phone_input;
        $hotline = $hotline_input;
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

    //change password admin
    function editPass($pass_input, $name_input){
        $conn = connect();
        $sql = "UPDATE users SET password = ?, update_at = CURRENT_TIMESTAMP WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $pass, $name);
        $pass = $pass_input;
        $name = $name_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    // update social
    function editSocial($facebook_input, $instagram_input, $google_plus_input, $youtube_input){
        $conn = connect();
        $sql = "UPDATE contact SET facebook = ?, instagram = ?, google_plus = ?, youtube = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $facebook, $instagram, $google_plus, $youtube);
        $facebook = $facebook_input;
        $instagram = $instagram_input;
        $google_plus = $google_plus_input;
        $youtube = $youtube_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    // update copyright
    function editCopyright($copyright_input){
        $conn = connect();
        $sql = "UPDATE contact SET copyright = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $copyright);
        $copyright = $copyright_input;
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

    //add admin
    function addAdmin($name_input, $pass_input){
        $conn = connect();
        $sql = "INSERT INTO users(username, password, role_id) VALUES(?,?,1)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss",$name, $pass);
        $name = $name_input;
        $pass = $pass_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //add Category
    function addCat($name_input, $description_input, $image_input){
        $conn = connect();
        $sql = "INSERT INTO categories(name, description, image) VALUES(?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss",$name, $description, $image);
        $name = $name_input;
        $description = $description_input;
        $image = $image_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    //add category detail
    function addDetail($name_input, $cateid_input, $image_input, $audio_input){
        $conn = connect();
        $sql = "INSERT INTO categories_details(name, categories_id, image, audio) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siss",$name, $cateid, $image, $audio);
        $name = $name_input;
        $cateid = $cateid_input;
        $image = $image_input;
        $audio = $audio_input;
        $stmt->execute();
        closeconnect($stmt, $conn);
    }

    // check admin
    function check_admin(){     
        $conn = connect();
        $sql = "SELECT * FROM users WHERE role_id = 1 and deleted = 0";
        $result = $conn->query($sql);
        return $result;
        $conn->close();
    }

    //check user by name
    // function checkByName($name_input){     
    //     $conn = connect();
    //     $sql = "SELECT * FROM users WHERE username = ? and deleted = 0";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bind_param("s", $name);
    //     $name = $name_input;
    //     $stmt->execute();
    //     $result = $stmt->get_result();
    //     return $result;
    //     closeconnect($stmt, $conn);
    // }
    session_start();
?>