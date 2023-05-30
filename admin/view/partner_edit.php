<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/partner_edit.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Partner</h2>
        <div class="block">               
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form">				
                <tr>
                    <td class="left">
                        <label>Partner Name</label>
                    </td>
                    <td class="left">
                        <input type="text" name="name" placeholder="Enter Partner name.." class="medium" value="<?php echo $name;?>">
                    </td>
                </tr>
				<tr>
                    <td class="left">
                        <label>Partner Logo</label>
                    </td>
                    <td class="left">
                        <input type="file" name = "image" value="<?php echo $image;?>">
                    </td>
                </tr>
				 <tr>
                    <td class="left"></td>
                    <td class="left">
                        <input type="submit" name="editPartner" Value="Update">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>