<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/changecopyright.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Copyright Text</h2>
        <div class="block copyblock"> 
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form">					
                <tr>
                    <td>
                        <input type="text" placeholder="Enter Copyright Text..." name="copyright" class="large" value="<?php echo $copyright?>">
                    </td>
                </tr>
				
				 <tr> 
                    <td>
                        <input type="submit" name="editCop" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>