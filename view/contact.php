<?php 
    include_once('../inc/header.php');
    $resultContact = selectContact();
    $dataContact = array();
    if($resultContact->num_rows>0){
        while($rowContact = $resultContact->fetch_assoc()){
            $dataContact['address'] = $rowContact['address'];
            $dataContact['hotline'] = $rowContact['hotline'];
            $dataContact['email'] = $rowContact['email'];
        }
    }
?>
<div class ="container-fluid bg-contact">
<div class="container">
    <br><br>
    <h3 class="violet text-center mb-5 fs-1">Contact us</h3>
    <div class="row">
        <div class="col-md-6 col-sm-12 text-center">
            <form action="" method="post">
                <input class="input-group p-2" type="text" name="" placeholder="Full name">
                <input class="input-group p-2" type="text" name="" placeholder="Phone number">
                <input class="input-group p-2" type="text" name="" placeholder="Email">
                <textarea name="" id="" rows="10" class="input-group p-2" placeholder="Comment"></textarea>
                <input type="submit" class="input-button">
            </form>
            <br>
        </div>
        <div class="col-md-6 col-sm-12 text-center mt-5">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-4">Address</h4>
                        <img class="mb-4" src="../img/logo/location2.png" alt="">
                        <address><?php echo $dataContact['address']?></address>
                    </div>
                    <div class="col">
                        <h4 class="mb-4">Phone</h4>
                        <img class="mb-4" src="../img/logo/phone2.png" alt="">
                        <p><?php echo $dataContact['hotline']?></p>
                    </div>
                    <div class="col">
                        <h4 class="mb-4">Email</h4>
                        <img class="mb-4" src="../img/logo/paperplane.png" alt="">
                        <p><?php echo $dataContact['email']?></p>
                    </div>
              </div>
        </div>
    </div>
</div></div>
<?php
    include_once('../inc/footer.php');
?>