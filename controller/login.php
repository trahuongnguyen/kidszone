<?php
    $dataLogin = array();
    $errorLogin = array();
    $flag = 0;
    if (!empty($_POST['login'])){
        $dataLogin['uname'] = isset($_POST['uname']) ? $_POST['uname'] : '';
        $dataLogin['pword'] = isset($_POST['pword']) ? $_POST['pword'] : '';
        $resultCheckUser = check_user($dataLogin['uname']);
        if($resultCheckUser->num_rows>0){
            while($rowCheckUser = $resultCheckUser->fetch_assoc()){
                if (empty($dataLogin['pword'])){
                    $errorLogin['pword'] = "Please enter your password.";
                }else if (!password_verify($dataLogin['pword'], $rowCheckUser['password'])){
                    $errorLogin['pword'] = "The password is wrong!";
                } else if ($rowCheckUser['role_id'] == 1){
                    $flag = 1;
                }
            }
        } else {
            if (empty($dataLogin['pword'])){
                $errorLogin['pword'] = "Please enter your password.";
            }
            if (empty($dataLogin['uname'])){
                $errorLogin['uname'] = "Please enter your username.";
            } else{
                $errorLogin['uname'] = "This user does not exist!";
            }
        }
        if (!$errorLogin){
            $_SESSION['user'] = array($dataLogin['uname'], $dataLogin['pword']);
            if (isset($_POST['remember'])){
                setcookie("username",$dataLogin['uname'],time() + 60*60*24*365);
                setcookie("password",$dataLogin['pword'],time() + 60*60*24*365);
            }
            if($flag == 0){
                header("location:../view/index.php");
            } else{
                $errorLogin['uname'] = "This user does not exist!";
            }
        } 
    }

?>