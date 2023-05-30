<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/about_us.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Social Media</h2>
        <div class="block scroll_block">               
         <form method="post" action="">
            <table class="form">
                <tr>
                    <td class="left">
                        <label>Website Title</label>
                    </td>
                    <td class="left">
                        <input type="text" placeholder="Enter Website Title..." name="title" class="medium" value="<?php echo $title;?>">
                    </td>
                </tr>					
                <tr>
                    <td class="left">
                        <label>Website</label>
                    </td>
                    <td class="left">
                        <input type="text" name="website" placeholder="Website..." class="medium" value="<?php echo $website;?>">
                    </td>
                </tr>
				<tr>
                    <td class="left">
                        <label>Email</label>
                    </td>
                    <td class="left">
                        <input type="text" name="email" placeholder="Email..." class="medium" value="<?php echo $email;?>">
                    </td>
                </tr>
				<tr>
                    <td class="left">
                        <label>Address</label>
                    </td>
                    <td class="left">
                        <input type="text" name="address" placeholder="Address..." class="medium" value="<?php echo $address;?>">
                    </td>
                </tr>
				<tr>
                    <td class="left">
                        <label>Hotline</label>
                    </td>
                    <td class="left">
                        <input type="text" name="hotline" placeholder="Hotline..." class="medium" value="<?php echo $hotline;?>">
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        <label>About us</label>
                    </td>
                    <td class="left">
                        <textarea name="aboutus" cols="50" rows="6" style = "height-max:180px;"><?php echo $about_us;?></textarea>
                    </td>
                </tr>
				<tr>
                    <td class="left"></td>
                    <td class="left">
                        <input type="submit" name="editAboutUs" Value="Update">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>