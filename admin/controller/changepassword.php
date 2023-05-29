<?php
    $dataAdmin = array();
    $errorAdmin = array();
    if(!empty($_POST['editPass'])){
        $dataAdmin['oPass'] = isset($_POST['oPass']) ? $_POST['oPass'] : '';
        $dataAdmin['nPass'] = isset($_POST['nPass']) ? $_POST['nPass'] : '';
        if(empty($dataAdmin['oPass'])){
            $errorAdmin['oPass'] = 'Please enter old password';
        } else if ($dataAdmin['oPass'] !== $_SESSION['user'][1]){
            $errorAdmin['oPass'] = "The old password is wrong!";
        }
        if(empty($dataAdmin['nPass'])){
            $errorAdmin['nPass'] = 'Please enter new password';
        }
        $dataAdmin['nPass'] = password_hash($dataAdmin['nPass'], PASSWORD_DEFAULT);
        if(!$errorAdmin){
            editPass($dataAdmin['nPass'], $_SESSION['user'][0]);
        }
    }
?>