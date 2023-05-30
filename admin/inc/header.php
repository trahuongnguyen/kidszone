<?php
    include('../model/dbhelper.php');
    if(!isset($_SESSION['user'])){
        header('Location: ../view/login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <title>Kids Zone</title>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft logo">
                    <a href=""> <img src="../img/welcome.png" alt="Logo" /></a>
				</div>
				<div class="floatleft middle">
					<h1>Welcome to Kids-Zone</h1>
					<p>www.Kid-Zone.com</p>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="../img/img-profile.jpg" alt="Profile Pic" />
                    </div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello <?php echo $_SESSION['user'][0]?></li>
                            <li><a href="../view/login.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="../view/index.php"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="../view/user_profile.php"><span>User Profile</span></a></li>
				<li class="ic-typography"><a href="../view/changepassword.php"><span>Change Password</span></a></li>
				<li class="ic-grid-tables"><a href="../view/inbox.php"><span>Inbox</span></a></li>
                <li class="ic-charts"><a href="../../view/index.php"><span>Visit Website</span></a></li>
            </ul>
        </div>
        <div class="clear">
        </div>
    