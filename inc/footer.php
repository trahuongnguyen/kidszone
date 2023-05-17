<?php
    $resultContact = selectContact();
    if($resultContact->num_rows>0){
        while($rowContact = $resultContact->fetch_assoc()){
            $name = $rowContact['name'];
            $web = $rowContact['website'];
            $email = $rowContact['email'];
            $address = $rowContact['address'];
            $hotline = $rowContact['hotline'];
            $intro = $rowContact['about_us'];
        }
    }
?>
<footer>
        <div class="container-fluid bg_footer">
            <div class="footer--decor"></div>
            <div class="row container mt-4 ms-auto">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <ul>
                                <li>
                                    <h4 class="text-decoration-none orgrane"><img src="../img/logo/time.png" alt=""> Work Time</h4>
                                </li>
                                <li class="text-decoration-none text-dark">Monday-Saturday</li>
                                <li class="text-decoration-none text-dark">24/24</li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <h4 class="text-decoration-none blue"><img src="../img/logo/phone.png" alt=""> Contact Us</h4>
                            <address>
                                Website: <a href="<?php echo $web;?>" class = "text-decoration-none text-dark"><?php echo $web;?></a><br>
                                Hotline: <a href="tel:<?php echo $hotline;?>" class = "text-decoration-none text-dark"><?php echo $hotline;?></a><br>
                                Address: <?php echo $address;?><br>
                                Email: <a href="mailto:<?php echo $email;?>" class = "text-decoration-none text-dark"><?php echo $email;?></a>
                            </address>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h4 class="violet"><img src="../img/logo/conect.png" alt=""> Follow Us</h4>
                            <ul class="d-block">
                                <li class="row">
                                    <div class="col">
                                        <a href="https://www.facebook.com/" class="fs-3"><i class="fa-brands fa-facebook fa-beat"></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://www.instagram.com/" class="fs-3"><i class="fab fa-instagram fa-beat" style="color: #8a6739;"></i></a>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col">
                                        <a href="https://www.google.com/" class="fs-3"><i class="fa-brands fa-google-plus-g fa-beat" style="color: #daab6a;"></i></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://www.youtube.com/" class="fs-3"><i class="fa-brands fa-youtube fa-beat" style="color: #dc4a38;"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <ul>
                        <li>
                            <h4 class="green"><img src="../img/logo/location.png" alt=""> Location</h4>
                        </li>
                        <li><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15676.341035867361!2d106.73530244618274!3d10.80478190822103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527db0ccd4737%3A0x1244c0359565b7b0!2sKidzone%20International%20Kindergarten!5e0!3m2!1svi!2s!4v1682702474435!5m2!1svi!2s"
                                width="350" height="200" style="border-radius:2px;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center" style="background-color: #f05f62;">
            <br>
            <span class="text-light" style = "margin: auto;">Copyright Kids Zone © 2018. All Rights Reserved.</span>
            <br>
        </div>
    </footer>
</body>
</html>