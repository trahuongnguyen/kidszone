<?php
    $dataAboutUs = array();
    $resultAboutUs = selectAboutUs();
    if($resultAboutUs->num_rows>0){
        while($rowAboutUs = $resultAboutUs->fetch_assoc()){
            $title = $rowAboutUs['name'];
            $website = $rowAboutUs['website'];
            $email = $rowAboutUs['email'];
            $address = $rowAboutUs['address'];
            $hotline = $rowAboutUs['hotline'];
            $about_us = $rowAboutUs['about_us'];
        }
    }

    if(!empty($_POST['editAboutUs'])){
        $dataAboutUs['title'] = !empty($_POST['title']) ? $_POST['title'] : $title;
        $dataAboutUs['website'] = !empty($_POST['website']) ? $_POST['website'] : $website;
        $dataAboutUs['email'] = !empty($_POST['email']) ? $_POST['email'] : $email;
        $dataAboutUs['address'] = !empty($_POST['address']) ? $_POST['address'] : $address;
        $dataAboutUs['hotline'] = !empty($_POST['hotline']) ? $_POST['hotline'] : $hotline;
        $dataAboutUs['aboutus'] = !empty($_POST['aboutus']) ? $_POST['aboutus'] : $about_us;
        editAboutUs($dataAboutUs['title'], $dataAboutUs['website'], $dataAboutUs['email'], $dataAboutUs['address'], $dataAboutUs['hotline'], $dataAboutUs['about_us']);
    }
?>