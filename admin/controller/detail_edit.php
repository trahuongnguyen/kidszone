<?php
    $dataDetail = array();
    $resultCat = selectCatUnDe();
    if($resultCat->num_rows>0){
        while($rowCat = $resultCat->fetch_assoc()){
            $cat[] = $rowCat['name'];
            $catid[] = $rowCat['id'];
        }
    }
    $resultDetailByid = selectDetailByid($_GET['id']);
    if($resultDetailByid->num_rows>0){
        while($rowDetailByid = $resultDetailByid->fetch_assoc()){
            $cat_id = $rowDetailByid['category_id'];
            $name = $rowDetailByid['name'];
            $image = $rowDetailByid['image'];
            $audio = $rowDetailByid['audio'];
        }
    }
    $resultCatByID = selectCatByid($cat_id);
	$nameCat = $resultCatByID->fetch_assoc();
    if(!empty($_POST['editDetail'])){
        $dataDetail['idCat'] = !empty($_POST['idCat']) ? $_POST['idCat'] : $cat_id;
        $dataDetail['name'] = !empty($_POST['name']) ? $_POST['name'] : $name;
        $dataDetail['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        $dataDetail['audio'] = !empty($_POST['audio']) ? $_POST['audio'] : $audio;
        editCat($dataDetail['name'], $dataDetail['idCat'], $dataDetail['image'],  $dataDetail['audio'], $_GET['id']);
    }
?>