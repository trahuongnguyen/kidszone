<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/detail_add.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Detail</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td class="left">
                        <label>Name</label>
                    </td>
                    <td class="left">
                        <input type="text" name = "nameDetail" placeholder="Enter Product Name..." class="medium" />
                    </td>
                </tr>
				<tr>
                    <td class="left">
                        <label>Category</label>
                    </td>
                    <td class="left">
                        <select id="select" name="idCat">
                            <?php
                                for($i=0; $i<count($cat); $i++){
                                    echo "<option value='{$catid[$i]}'>{$cat[$i]}</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        <label>Upload Image</label>
                    </td>
                    <td class="left">
                        <input type="file" name = "image" />
                    </td>
                </tr>
				<tr>
                    <td class="left">
                        <label>Upload Audio</label>
                    </td>
                    <td class="left">
                        <input type="file" name = "audio" />
                    </td>
                </tr>
				<tr>
                    <td class="left"></td>
                    <td class="left">
                        <input type="submit" name="addDetail" Value="Save" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>


