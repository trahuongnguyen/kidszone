<?php
    $dataPartner = array();
    $resultPartnerByid = selectPartnerByid($_GET['id']);
    if($resultPartnerByid->num_rows>0){
        while($rowPartnerByid = $resultPartnerByid->fetch_assoc()){
            $name = $rowPartnerByid['name'];
            $image = $rowPartnerByid['image'];
        }
    }

    if(!empty($_POST['editCat'])){
        $dataPartner['name'] = !empty($_POST['name']) ? $_POST['name'] : $name;
        $dataPartner['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        editPartner($dataPartner['name'], $dataPartner['image'], $_GET['id']);
    }
?>