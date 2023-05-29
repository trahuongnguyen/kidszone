<?php
    include('../model/dbhelper.php');
    $dataLogin = array();
    $errorLogin = array();
    $flag = 0;
    if (!empty($_POST['login'])){
        $dataLogin['username'] = isset($_POST['username']) ? $_POST['username'] : '';
        $dataLogin['password'] = isset($_POST['password']) ? $_POST['password'] : '';
        $resultCheckUser = check_user($dataLogin['username']);
        if($resultCheckUser->num_rows>0){
            while($rowCheckUser = $resultCheckUser->fetch_assoc()){
                if (empty($dataLogin['password'])){
                    $errorLogin['password'] = "Please enter your password.";
                }else if (!password_verify($dataLogin['password'], $rowCheckUser['password'])){
                    $errorLogin['password'] = "The password is wrong!";
                } else if ($rowCheckUser['role_id'] == 1){
                    $flag = 1;
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
            $_SESSION['user'] = array($dataLogin['username'], $dataLogin['password']);
            if($flag == 1){
                header("location:../view/index.php");
            } else{
                $errorLogin['username'] = "This user does not exist!";
            }
        } 
    }

?>