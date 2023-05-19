<?php
    $dataContact = array();
    if(!empty($_POST['contact'])){
        $dataContact['name'] = $_POST['name'];
        $dataContact['phone'] = $_POST['phone'];
        $dataContact['email'] = $_POST['email'];
        $dataContact['comment'] = $_POST['comment'];
        addComment($dataContact['name'], $dataContact['phone'], $dataContact['email'], $dataContact['comment']);
        echo "<script type='text/javascript'>alert('Contact successfully. We will reply in few time.');</script>";
        header('location:../view/contact.php');
    }
?>