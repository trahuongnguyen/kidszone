<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/detail_edit.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Detail</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td class="left">
                        <label>Name</label>
                    </td>
                    <td class="left">
                        <input type="text" name = "nameDetail" placeholder="Enter Product Name..." class="medium" value = "<?php echo $name?>">
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
                                    if($catid[$i] == $nameCat['id']){
                                        echo "<option value='{$catid[$i]}' selected>{$cat[$i]}</option>";
                                    } else{
                                        echo "<option value='{$catid[$i]}'>{$cat[$i]}</option>";
                                    }
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
                        <input type="file" name = "image" value = "<?php echo $image?>">
                    </td>
                </tr>
				<tr>
                    <td class="left">
                        <label>Upload Audio</label>
                    </td>
                    <td class="left">
                        <input type="file" name = "audio" value = "<?php echo $audio?>">
                    </td>
                </tr>
				<tr>
                    <td class="left"></td>
                    <td class="left">
                        <input type="submit" name="editDetail" Value="Update">
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>


