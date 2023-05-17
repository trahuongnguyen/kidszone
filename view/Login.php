<?php
    include_once('../inc/header.php');
?>
    <div class="body">
        <div class="center-container">
            <br><br>
            <h1 class="h1">Login</h1>
            <div class="main-content-agile">
                <div class="sub-main-w3">	
                    <form action="" method="post">
                        <div class="pom-agile">
                            <!-- <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span> -->
                            <input placeholder="<?php echo isset($errorLogin['uname']) ? $errorLogin['uname'] : 'Username'?>" name="uname" class="user" type="text">
                        </div>
                        <div class="pom-agile">
                            <!-- <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span> -->
                            <input  placeholder="<?php echo isset($errorLogin['pword']) ? $errorLogin['pword'] : 'Password'?>" name="pword" class="pass" type="password">
                        </div>
                        <div class="sub-w3l">
                            <input type="checkbox" name="remember">
                            <label for="remember">Remember me?</label>
                            <a href="../view/register.php">Sign Up here</a>
                            <div class="right-w3l">
                                <input type="submit" name = "login" value="Sign In">
                            </div>
                            <br><br><br><br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include_once('../inc/footer.php');
?>