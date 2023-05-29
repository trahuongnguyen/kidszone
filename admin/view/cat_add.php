<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add New Category</h2>
                <div class="block copyblock"> 
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">					
                        <tr>
                            <td class="left">
                                <label>Category Name</label>
                            </td>
                            <td class="left">
                                <input type="text" name="name" placeholder="Enter Category name..." class="medium">
                            </td>
                        </tr>      
                        <tr>
                            <td class="left">
                                <label>Description</label>
                            </td>
                            <td class="left">
                                <textarea name="description" cols="50" rows="6"></textarea>
                            </td>
                        </tr>     
                        <tr>
                            <td class="left">
                                <label>Image</label>
                            </td>
                            <td class="left">
                            <input type="file" name = "image">
                            </td>
                        </tr>
                        <tr>
                            <td class="left"></td>
                            <td class="left">
                                <input type="submit" name="addCat" Value="Save">
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include '../inc/footer.php';?>