<?php
    include_once('../model/dbhelper.php');
    include_once('../controller/login.php');
    include('../controller/register.php');
    include('../controller/account.php');
    include('../controller/contact.php');
    include('../controller/search.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/register_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Kids Zone</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <style>
        .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            overflow-x: hidden;
        }
        * html .ui-autocomplete {
            height: 200px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container-fluid bg_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-12 margin_header">
                        <img src="../img/logo/welcome.png" class="img-fluid" alt="" width="40%">
                    </div>
                    <div class="col-md-7 col-12 margin_header">
                        <div class="input-group" style="width: 70%; margin-left: 10%;">
                            <input type="text" name = "search" id="search" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-danger" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <script type="text/javascript">
                            $(function() {
                                const list = <?php echo json_encode($data); ?>;
                                $("#search").autocomplete({
                                    source: list,
                                });
                            });
                        </script>
                    </div>
                    <div class="col-md-2 margin_header">
                            <div class="sec-center"> 	
                                <input class="dropdown" type="checkbox" id="dropdown" name="dropdown" style = "position: absolute !important; opacity: 0 !important;"/>
                                <label class="for-dropdown" for="dropdown"> <i class="fa-solid fa-bars"></i> <?php echo isset($_SESSION['user']) ? $_SESSION['user'][0] : 'Account'?> </label>
                                <div class="section-dropdown">
                                    <?php
                                        if(!isset($_SESSION['user'])){
                                            echo '<a href="../view/login.php" class="a-drop"><p><i class="fa-solid fa-user"></i> Login</p></a>
                                            <a href="../view/register.php" class="a-drop"><p><i class="fa-solid fa-user-plus"></i> Register</p></a>';
                                        } else{
                                            echo '<a href="../view/account.php" class="a-drop"><p><i class="fa-solid fa-user"></i> Account</p></a>
                                            <a href="../controller/logout.php" class="a-drop"><p><i class="fa-solid fa-right-from-bracket"></i> Logout</p></a>';
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container-fluid nav-b">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav nav-menu margin_header">
                    <div class="row">
                        <li class="menu-item li_nav border-0 col">
                            <a class="nav-link a-h" href="../view/index.php">Home</a>
                        </li>
                        <li class="menu-item li_nav col dropdown">
                            <a class="nav-link a-h" href="">Category</a>
                            <ul class="dropdown-content">
                                <?php
                                    $resultCate = selectCat();
                                    if($resultCate->num_rows>0){
                                        while($rowCate = $resultCate->fetch_assoc()){
                                            if(isset($_SESSION['user'])){
                                                if($rowCate['id']>1){
                                                    echo "<li><a href='../view/detail.php?id={$rowCate['id']}'>{$rowCate['name']}</a></li>";
                                                } else{
                                                    echo "<li><a href='../view/numberic.php?id={$rowCate['id']}'>{$rowCate['name']}</a></li>";
                                                }
                                            } else {
                                                echo "<li><a href='../view/login.php'>{$rowCate['name']}</a></li>";
                                            }
                                        }
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="menu-item li_nav col">
                            <img src="../img/logo/h1.png" alt="" width="80%">
                        </li>
                        <li class="menu-item li_nav col">
                            <a class="nav-link a-h" href="#">Game</a>
                        </li>
                        <li class="menu-item li_nav col">
                            <a class="nav-link a-h" href="contact.php">Contact</a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>
    </header>