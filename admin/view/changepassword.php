<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/changepassword.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Change Password</h2>
        <div class="block">               
         <form>
            <table class="form">					
                <tr>
                    <td>
                        <label>Old Password</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter Old Password..."  name="oPass" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>New Password</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter New Password..." name="nPass" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="editPass" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>