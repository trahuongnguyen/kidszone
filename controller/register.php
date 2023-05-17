<?php
    // require_once("../model/dbhelper.php");
    $errorRegister = array();
    $dataRegister = array();
    if (!empty($_POST['register'])){
        $dataRegister['uname'] = isset($_POST['uname']) ? $_POST['uname'] : '';
        $dataRegister['pword'] = isset($_POST['pword']) ? $_POST['pword'] : '';
        $dataRegister['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $dataRegister['address'] = isset($_POST['address']) ? $_POST['address'] : '';
        if (empty($dataRegister['uname'])){
            $errorRegister['uname'] = "Please enter your username.";    
        } else if (check_username($dataRegister['uname']) === 1){
            $errorRegister['uname'] = "Account already exist, please enter another account.";
        }
        if (empty($dataRegister['pword'])){
            $errorRegister['pword'] = "Please enter your password.";
        }
        if (empty($dataRegister['email'])){
            $errorRegister['email'] = "Please enter your email.";
        } else if (!is_email($dataRegister['email'])){
            $errorRegister['email'] = "Incorrect type, please enter correct email!";
        } else if (check_email($dataRegister['email']) === 1){
            $errorRegister['email'] = "Email already exist, please enter another email.";
        }
        if (empty($dataRegister['address'])){
            $errorRegister['address'] = "Please enter your address.";
        }
        $dataRegister['pword'] = password_hash($dataRegister['pword'], PASSWORD_DEFAULT);
        if (!$errorRegister){
            addUser($dataRegister['uname'], $dataRegister['pword'], $dataRegister['email'], $dataRegister['address']);
            header('Location: ../view/Login.php');
        }
    }
?>