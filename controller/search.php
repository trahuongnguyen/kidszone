<?php
    // include_once('../model/dbhelper.php');
    $conn = connect();
    $data = array();
    $sqlCat = "SELECT * FROM categories ORDER BY name asc LIMIT 10";
    $resultCat = $conn->query($sqlCat);
    if($resultCat->num_rows>0){
        while($rowCat = $resultCat->fetch_assoc()){
            $data[] = $rowCat['name'];
        }
    }
    $sqlDetail = "SELECT * FROM details ORDER BY name";
    $resultDetail = $conn->query($sqlDetail);
    if($resultDetail->num_rows>0){
        while($rowDetail = $resultDetail->fetch_assoc()){
            $data[] = $rowDetail['name'];
        }
    }
    $conn->close();
?>