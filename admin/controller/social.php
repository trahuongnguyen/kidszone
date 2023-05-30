<?php
    $dataSocial = array();
    $resultSocial = selectContact();
    if($resultSocial->num_rows>0){
        while($rowSocial = $resultSocial->fetch_assoc()){
            $facebook = $rowSocial['facebook'];
            $instagram = $rowSocial['instagram'];
            $google_plus = $rowSocial['google_plus'];
            $youtube = $rowSocial['youtube'];
        }
    }
    if(!empty($_POST['editSocial'])){
        $dataSocial['facebook'] = !empty($_POST['facebook']) ? $_POST['facebook'] : $facebook;
        $dataSocial['instagram'] = !empty($_POST['instagram']) ? $_POST['instagram'] : $instagram;
        $dataSocial['google_plus'] = !empty($_POST['google_plus']) ? $_POST['google_plus'] : $google_plus;
        $dataSocial['youtube'] = !empty($_POST['youtube']) ? $_POST['youtube'] : $youtube;
        editSocial($dataSocial['facebook'], $dataSocial['instagram'], $dataSocial['google_plus'], $dataSocial['youtube']);
    }
?>