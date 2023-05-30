<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <div class="block">
            <div class="card">
                <?php
                    if(isset($_SESSION['user'])){
                        echo "<img src='../img/user_profile.png' style='width:100%;'>
                        <div class='container'>
                            <h1>{$_SESSION['user'][0]}</h1>
                            <p>Role: Admin</p>
                            <a onclick='confirmDelete()' href='../controller/deleted.php?name='admin'&id={$_SESSION['user'][2]}' style='color:red; padding-bottom:5px;'>You want to delete account?</a>
                        </div>";
                    }
                ?>
                <script src="../js/deleteConfirm.js"></script>
            </div>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>