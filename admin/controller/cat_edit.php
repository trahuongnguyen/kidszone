<?php
    $dataCat = array();
    $resultCatByid = selectCatByid($_GET['id']);
    if($resultCatByid->num_rows>0){
        while($rowCatByid = $resultCatByid->fetch_assoc()){
            $name = $rowCatByid['name'];
            $description = $rowCatByid['description'];
            $image = $rowCatByid['image'];
        }
    }

    if(!empty($_POST['editCat'])){
        $dataCat['name'] = !empty($_POST['name']) ? $_POST['name'] : $name;
        $dataCat['description'] = !empty($_POST['description']) ? $_POST['description'] : $description;
        $dataCat['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        editCat($dataCat['name'], $dataCat['description'], $dataCat['image'], $_GET['id']);
    }
?>