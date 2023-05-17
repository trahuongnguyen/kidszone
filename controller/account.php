<?php
    $error = array();
    $data = array();
    if(isset($_SESSION['user'])){
        $resultAccount = selectUserByName($_SESSION['user'][0]);
        if($resultAccount->num_rows>0){
            while($rowAccount = $resultAccount->fetch_assoc()){
                $dataAccount['id'] = $rowAccount['id'];
                $dataAccount['uname'] = $rowAccount['username'];
                $dataAccount['pword'] = $rowAccount['password'];
                $dataAccount['email'] = $rowAccount['email'];
                $dataAccount['address'] = $rowAccount['address'];
            }
        }
        if (!empty($_POST['update'])){
            $data['uname'] = isset($_POST['uname']) ? $_POST['uname'] : $dataAccount['uname'];
            $data['pword'] = isset($_POST['pword']) ? $_POST['pword'] : $dataAccount['pword'];
            $data['email'] = isset($_POST['email']) ? $_POST['email'] : $dataAccount['email'];
            $data['address'] = isset($_POST['address']) ? $_POST['address'] : $dataAccount['address'];
            if(check_username($data['uname']) === 1 && $data['uname']!==$dataAccount['uname']){
                echo "<script type='text/javascript'>alert('Username already exist, please enter another account!');</script>";
            }else if (!is_email($data['email'])){
                echo "<script type='text/javascript'>alert('Incorrect type, please enter correct email!');</script>";
            }else if (check_email($data['email']) === 1 && $data['email']!==$dataAccount['uname']){
                echo "<script type='text/javascript'>alert('Email already exist, please enter another account!');</script>";
            } else if($data['uname'] === $dataAccount['uname'] && password_verify($data['pword'], $dataAccount['password'])){
                if($data['email'] === $dataAccount['email'] && $data['address'] === $dataAccount['address']){
                    echo "<script type='text/javascript'>alert('Account already exist, please enter another account!');</script>";
                }
            } else{
                $data['pword'] = password_hash($data['pword'], PASSWORD_DEFAULT);
                editUser($data['uname'], $data['pword'], $data['email'], $data['address'], $dataAccount['id']);
                header('Location: ../view/Login.php');
            }
        }
        if(!empty($_POST['delete'])){
            deleteUser($dataAccount['id']);
            header('location: ../controller/logout.php');
        }
    }
?>