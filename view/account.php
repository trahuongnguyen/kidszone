<?php
    include('../inc/header.php');
?>
    <div class = "body">
        <div class="center-container">
            <h1 class="h1">Account</h1>
            <div class="main-content-agile">
                <div class="sub-main-w3">	
                    <form action="#" method="post">
                        <div class="pom-agile">
                            <input name="uname" type="text" value = "<?php echo $_SESSION['user'][0];?>">
                        </div>
                        <div class="pom-agile">
                            <input name="pword" type="password" value = "<?php echo $_SESSION['user'][1];?>">
                        </div>
                        <div class="pom-agile">
                            <input name="email" type="email" value = "<?php echo $dataAccount['email'];?>">
                        </div>
                        <div class="pom-agile">
                            <input name="address" type="text" value = "<?php echo $dataAccount['address'];?>">
                        </div>
                        <div class="sub-w3l">
                            <div class="right-w3l">
                                <input type="submit" name = "update" value="Update">
                                <input type="submit" name = "delete" value="Delete Account">
                            </div>
                            <br><br><br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include('../inc/footer.php');
?>