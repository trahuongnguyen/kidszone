<?php
    include('../model/dbhelper.php');
    $dataLogin = array();
    $errorLogin = array();
    $flag = 0;
    if (!empty($_POST['login'])){
        $dataLogin['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        $dataLogin['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $resultCheckUser = check_admin($dataLogin['username']);
        if($resultCheckUser->num_rows>0){
            while($rowCheckUser = $resultCheckUser->fetch_assoc()){
                if (empty($dataLogin['password'])){
                    $errorLogin['password'] = "Please enter your password.";
                }else if (!password_verify($dataLogin['password'], $rowCheckUser['password'])){
                    $errorLogin['password'] = "The password is wrong!";
                } else if ($rowCheckUser['role_id'] == 1){
                    $flag = 1;
                    $dataLogin['id'] = $rowCheckUser['id'];
                }
            }
        } else {
            if (empty($dataLogin['password'])){
                $errorLogin['password'] = "Please enter your password.";
            }
            if (empty($dataLogin['username'])){
                $errorLogin['username'] = "Please enter your username.";
            } else{
                $errorLogin['username'] = "This user does not exist!";
            }
        }
        if (!$errorLogin){
            if($flag == 1){
                $_SESSION['user'] = array($dataLogin['username'], $dataLogin['password'], $dataLogin['id']);
                header("location:../view/index.php");
            } else{
                $errorLogin['username'] = "This user does not exist!";
            }
        } 
    }

?>