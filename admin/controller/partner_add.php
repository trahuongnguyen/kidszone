<?php
    $dataPartner = array();
    $errorPartner = array();
    if(!empty($_POST['addPartner'])){
        $dataPartner['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $dataPartner['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        $resultPartner = selectPartner();
        if(empty($dataPartner['name'])){
            $errorPartner['name'] = 'Please enter Partner name';
        }
        if(empty($dataPartner['image'])){
            $errorPartner['image'] = 'Please enter Partner logo';
        }
        if($resultPartner->num_rows>0){
            while($rowPartner = $resultPartner->fetch_assoc()){
                if($dataPartner['name'] === $rowPartner['name'] && $dataPartner['image'] === $rowPartner['image']){
                    $errorPartner['name'] = 'Partner already exist, please enter another partner.';
                }
            }
        }
        if(!$errorCat){
            addDetail($dataPartner['name'], $dataPartner['image']);
        }
    }
?>