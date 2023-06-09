<?php
    include_once('../inc/header.php');
?>
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="main-123">
                <?php
                    $resultNum = selectDetailByid(1);
                    if($resultNum->num_rows>0){
                        while($rowNum = $resultNum->fetch_assoc()){
                            $name[] = $rowNum['name'];
                            $image[] = $rowNum['image'];
                            $audio[] = $rowNum['audio'];
                        }
                    }
                    echo "<div class='row'>";
                    for($i=0; $i<count($name); $i++){
                        if(($i+1)%5!=0){
                            echo 
                            "<div class='col' onclick='playAudio({$i})'>
                                <audio id='{$i}' class='myaudio'>
                                    <source src='../voice/$audio[$i]' type='audio/mpeg'>
                                    Your browser does not support the audio element.
                                </audio>
                                <button class='css-button'><img src='../img/{$image[$i]}' alt=''><br><h1 style='font-family: Pacifico, cursive; color: #f05f62; text-shadow: 3px 3px 0px #478860;'>{$name[$i]}</h1></button>
                            </div>";
                        } else {
                            echo 
                                "<div class='col' onclick='playAudio({$i})'>
                                    <audio id='{$i}' class='myaudio'>
                                        <source src='../voice/$audio[$i]' type='audio/mpeg'>
                                        Your browser does not support the audio element.
                                    </audio>
                                    <button class='css-button'><img src='../img/{$image[$i]}' alt=''><br><h1 style='font-family: Pacifico, cursive; color: #f05f62; text-shadow: 3px 3px 0px #478860;'>{$name[$i]}</h1></button>
                                </div>
                            </div>
                            <div class='row'>";
                        }
                    }
                    echo "</div>";
                ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div id="a" class="col title-123 ms-3"></div>
                            <div class="col"><img class="title-123-img" src="../img/dau/cong.png" alt=""></div>
                            <div id="b" class="col title-123"></div>
                            <div class="col"><img class="title-123-img" src="../img/dau/bang.png" alt=""></div>
                            <div class="col"><input type="text" id="d" class="title-123-input"></div>
                        </div>
                    </div>
                    <div class = "clear"></div>
                    <div class="col">
                        <div class="row">
                            <div id="g" class="col title-123"></div>
                            <div class="col"><img class="title-123-img" src="../img/dau/tru.png" alt=""></div>
                            <div id="h" class="col title-123"></div>
                            <div class="col"><img class="title-123-img" src="../img/dau/bang.png" alt=""></div>
                            <div class="col"><input type="text" id="e" class="title-123-input"></div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-5">
                    <input type="button" value="submit" onClick="sosanh()" class="title-123-submit">
                    <a href="../view/numberic.php?id=<?php echo $_GET['id']?>" class="title-123-link mt-5">Next Question</a>
                </div>
            </div>
            <div class='container-fluid mb-5'>
                <?php
                    $nextPage = $_GET['id']+1;
                    echo "<a href='../view/detail.php?id={$nextPage}' class='next-css'>Next > </a>";
                ?>
            </div>
        </div>
    </div>
    <div class = "mb-5" style = "margin-left:45%;"><a href="#" class="back_top">Back to Top &#8593;</a></div>
    <script src="../js/detail.js"></script>
    <script src="../js/math.js"></script>
<?php
    include_once('../inc/footer.php');
?>