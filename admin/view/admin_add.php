<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/admin_add.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Admin</h2>
    <div class="block">               
        <form action="" method="post" enctype="multipart/form-data">
            <table class="form">     
                <tr>
                    <td class="left">
                        <label>Username</label>
                    </td>
                    <td class="left">
                        <input type="text" name="uname" placeholder="Enter Username..." class="medium" />
                    </td>
                </tr>           
    
                <tr>
                    <td class="left">
                        <label>Password</label>
                    </td>
                    <td class="left">
                        <input type="text" name="pword" placeholder="Enter Password..." class="medium" />
                    </td>
                </tr>
               
				<tr>
                    <td class="left"></td>
                    <td class="left">
                        <input type="submit" name="addAdmin" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>