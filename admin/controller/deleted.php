<?php
    $name = $_GET['name'];
    $id = $_GET['id'];
    if($name == 'cat'){
        deleteCat($id);
        header('Location: ../view/cat_list.php');
    }
    if($name == 'detail'){
        deleteDetail($id);
        header('Location: ../view/detail_list.php');
    }
    if($name == 'inbox'){
        deleteComment($id);
        header('Location: ../view/inbox.php');
    }
    if($name == 'partner'){
        deletePartner($id);
        header('Location: ../view/partner_list.php');
    }
    if($name == 'admin'){
        deleteUser($id);
        header('Location: ../controller/logout.php');
    }
?>