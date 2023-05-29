<?php
    $resultCop = selectContact();
    if($resultCop->num_rows>0){
        while($rowCop = $resultCop->fetch_assoc()){
            $copyright = $rowCop['copyright'];
        }
    }
    if(!empty($_POST['editPass'])){    
        if(!empty($_POST['editCop'])){
            $copyright = !empty($_POST['copyright']) ? $_POST['copyright'] : $copyright;
            editCopyright($copyright);
        }
    }
?>