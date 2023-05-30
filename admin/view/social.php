<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/social.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Social Media</h2>
        <div class="block">               
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form">				
                <tr>
                    <td class="left">
                        <label>Facebook</label>
                    </td>
                    <td class="left">
                        <input type="text" name="facebook" placeholder="Facebook link.." class="medium" value="<?php echo $facebook;?>">
                    </td>
                </tr>
				 <tr>
                    <td class="left">
                        <label>Instagram</label>
                    </td>
                    <td class="left">
                        <input type="text" name="instagram" placeholder="Instagram link.." class="medium" value="<?php echo $instagram;?>">
                    </td>
                </tr>
				
				 <tr>
                    <td class="left">
                        <label>Google Plus</label>
                    </td>
                    <td class="left">
                        <input type="text" name="google_plus" placeholder="Google Plus link.." class="medium" value="<?php echo $google_plus;?>">
                    </td>
                </tr>
				
				 <tr>
                    <td class="left">
                        <label>Youtube</label>
                    </td>
                    <td class="left">
                        <input type="text" name="youtube" placeholder="Youtube link.." class="medium" value="<?php echo $youtube;?>">
                    </td>
                </tr>
				
				 <tr>
                    <td class="left"></td>
                    <td class="left">
                        <input type="submit" name="editSocial" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>