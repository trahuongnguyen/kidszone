<?php
    $dataDetail = array();
    $errorDetail = array();
    $resultCat = selectCatUnDe();
    if($resultCat->num_rows>0){
        while($rowCat = $resultCat->fetch_assoc()){
            $cat[] = $rowCat['name'];
            $catid[] = $rowCat['id'];
        }
    }
    if(!empty($_POST['addDetail'])){
        $dataDetail['nameDetail'] = isset($_POST['nameDetail']) ? $_POST['nameDetail'] : '';
        $dataDetail['idCat'] = isset($_POST['idCat']) ? $_POST['idCat'] : '';
        $dataDetail['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        $dataDetail['audio'] = isset($_POST['audio']) ? $_POST['audio'] : '';
        $resultDetail = selectDetail();
        if(empty($dataDetail['nameDetail'])){
            $errorCat['nameDetail'] = 'Please enter Detail name';
        }
        if(empty($dataDetail['idCat'])){
            $errorCat['idCat'] = 'Please enter Category name';
        }
        if(empty($dataDetail['image'])){
            $errorCat['image'] = 'Please choose image';
        }
        if(empty($dataDetail['audio'])){
            $errorCat['audio'] = 'Please choose audio';
        }
        if($resultDetail->num_rows>0){
            while($rowDetail = $resultDetail->fetch_assoc()){
                if($dataDetail['nameDetail'] === $rowDetail['name'] && $dataDetail['idCat'] === $rowDetail['category_id']){
                    $errorCat['nameDetail'] = 'Detail already exist, please enter another detail.';
                }
            }
        }
        if(!$errorCat){
            addDetail($dataDetail['nameDetail'], $dataDetail['idCat'], $dataDetail['image'], $dataDetail['audio']);
        }
    }
?>