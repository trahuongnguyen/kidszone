<?php
    $dataAdmin = array();
    $errorAdmin = array();
    if(!empty($_POST['addAdmin'])){
        $dataAdmin['uname'] = isset($_POST['uname']) ? $_POST['uname'] : '';
        $dataAdmin['pword'] = isset($_POST['pword']) ? $_POST['pword'] : '';
        $resultAdmin = check_admin();
        if(empty($dataAdmin['uname'])){
            $errorAdmin['uname'] = 'Please enter username';
        }
        if(empty($dataAdmin['pword'])){
            $errorAdmin['pword'] = 'Please enter password';
        }
        if($resultAdmin->num_rows>0){
            while($rowAdmin = $resultAdmin->fetch_assoc()){
                if($dataAdmin['uname'] === $rowAdmin['username']){
                    $errorAdmin['uname'] = 'Account already exist, please enter another account.';
                }
            }
        }
        $dataAdmin['pword'] = password_hash($dataAdmin['pword'], PASSWORD_DEFAULT);
        if(!$errorAdmin){
            addAdmin($dataAdmin['uname'], $dataAdmin['pword']);
        }
    }
?>