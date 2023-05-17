<?php
    include('../inc/header.php')
?>
    <div class = "body">
        <div class="center-container">
            <br><br>
            <h1 class="h1">Register</h1>
            <div class="main-content-agile">
                <div class="sub-main-w3">	
                    <form action="#" method="post">
                        <div class="pom-agile">
                            <input placeholder="<?php echo isset($errorRegister['uname']) ? $errorRegister['uname'] : 'Username'?>" name="uname" type="text">
                        </div>
                        <div class="pom-agile">
                            <input  placeholder="<?php echo isset($errorRegister['pword']) ? $errorRegister['pword'] : 'Password'?>" name="pword" type="password">
                        </div>
                        <div class="pom-agile">
                            <input  placeholder="<?php echo isset($errorRegister['email']) ? $errorRegister['email'] : 'Email'?>" name="email" type="email">
                        </div>
                        <div class="pom-agile">
                            <input  placeholder="<?php echo isset($errorRegister['address']) ? $errorRegister['address'] : 'Address'?>" name="address" type="text">
                        </div>
                        <div class="sub-w3l">
                            <a href="../view/login.php">Sign In here</a>
                            <div class="right-w3l">
                                <input type="submit" name = "register" value="Sign Up">
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