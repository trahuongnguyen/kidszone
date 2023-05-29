<?php
    include_once('../inc/header.php');
    // require_once("../model/dbhelper.php");
    $resultPartner = selectPartner();
    $resultCate = selectCat();
?>
    <div class="container-fluid">
        <div class="slider">
            <div class="title">
                Kids Zone
            </div>
            <div class="images">
                <?php
                    $dataCate = array();
                    if($resultCate->num_rows>0){
                        $i = 1;
                        while($rowCate = $resultCate->fetch_assoc()){
                            echo 
                            "<div class='item' style='--i: {$i};'>
                                <img src='../img/logo/logo/{$rowCate['image']}'>
                            </div>";
                            $dataCate['name'][] = $rowCate['name'];
                            $dataCate['desription'][] = $rowCate['description'];
                            $i++;
                            if($i>6){
                                break;
                            }
                        }
                    }
                ?>
            </div>
            <div class="content">
                <?php
                    echo 
                        "<div class='item active'>
                            <h1>{$dataCate['name'][5]}</h1>
                            <div class='des'>{$dataCate['desription'][5]}</div>
                        </div>";
                    for($j = 4; $j>-1; $j--){
                        echo 
                        "<div class='item'>
                            <h1>{$dataCate['name'][$j]}</h1>
                            <div class='des'>{$dataCate['desription'][$j]}</div>
                        </div>";
                    }
                ?>
            </div>
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
    </div>
    <div class="container-fluid bg-about text-center">
        <h1 class = "pink">About us</h1>
        <p class = "container" style = "text-align: justify;"><?php echo (selectAboutUs()->fetch_assoc())['about_us'];?></p>
    </div>
    <div class="container text-center mt-3">
        <h2 class="violet">Partner</h2>
        <p>List of our partners</p>
        <img src="img/logo/logopartner.png" alt="">
        <div class="container-fluid mt-4 mb-4">
            <div class="row">
                <?php
                    if($resultPartner->num_rows>0){
                        while($rowPartner = $resultPartner->fetch_assoc()){
                            echo "<div class='col'><img src='../img/logo/{$rowPartner['image']}' alt=''></div>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
<?php
    include('../inc/footer.php');
?>
<script src="../js/index.js"></script>