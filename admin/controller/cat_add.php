<?php
    $dataCat = array();
    $errorCat = array();
    if(!empty($_POST['addCat'])){
        $dataCat['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $dataCat['description'] = isset($_POST['description']) ? $_POST['description'] : '';
        $dataCat['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        $resultCat = selectCat();
        if(empty($dataCat['name'])){
            $errorCat['name'] = 'Please enter category name';
        }
        if(empty($dataCat['description'])){
            $errorCat['description'] = 'Please enter description';
        }
        if(empty($dataCat['image'])){
            $errorCat['image'] = 'Please choose image';
        }
        if($resultCat->num_rows>0){
            while($rowCat = $resultCat->fetch_assoc()){
                if($dataCat['name'] === $rowCat['name']){
                    $errorCat['name'] = 'Category already exist, please enter another category.';
                }
            }
        }
        if(!$errorCat){
            addCat($dataCat['name'], $dataCat['description'], $dataCat['image']);
        }
    }
?>