<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container-fluid bg_header">
            <div class="row">
                <div class="col-md-3 col-12 margin_header">
                    <img src="../img/logo/welcome.png" class="img-fluid" alt="" width="40%">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 col-12 margin_header">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3 margin_header">
                    <div class="row">
                        <div class="col">
                            <a href="../view/Login.php" class="nav-link fs-5"><i class="fa-solid fa-user"></i> Login</a>
                        </div>
                        <div class="col">
                            <a href="../view/Register.php" class="nav-link fs-5"><i class="fa-solid fa-user-plus"></i> Register</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav nav-menu margin_header">
                    <div class="row">
                        <li class="menu-item li_nav border-0 col">
                            <a class="nav-link fs-5" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="menu-item dropdown col li_nav">
                            <a class="nav-link fs-5" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                                Category
                            </a>
                            <ul class="dropdown-content" aria-labelledby="navbarDropdown">
                              <li><a class="nav-link" href="#">Action</a></li>
                              <li><a class="nav-link" href="#">Another action</a></li>
                              <li><a class="nav-link" href="#">Something else here</a></li>
                            </ul>
                          </li>            
                        <li class="menu-item li_nav col">
                            <img src="../img/logo/h.png" alt="" width="50px">
                        </li>
                        <li class="menu-item li_nav col">
                            <a class="nav-link fs-5" href="#">Game</a>
                        </li>
                        <li class="menu-item li_nav col">
                            <a class="nav-link fs-5" href="#">Contact</a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>
    </header>