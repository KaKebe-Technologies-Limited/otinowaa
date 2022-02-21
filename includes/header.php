<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap stlesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="assets/css/main_style.css">

    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/main.js"></script>

    <!-- Google fonts & icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Titillium+Web:wght@700&display=swap" rel="stylesheet">

    <title><?php echo $title; ?></title>
</head>
<body>

<!-- session sections for messages after data is saved into the databse -->

    <header class="fixed-top w-100">
        <div class="header-title p-2">
            <a href="index.php"><img src="images/logobg.png" width="80%" height="50px" alt=""></a>
            <!-- <h5 class="text-white">OTW BROWSER</h5> -->
        </div<>
    </header>
     <!-- Mobile Navigation -->
 <nav id="mobile-nav" class="navbar navbar-light navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="images/logobg.png" width="70%" height="30px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item center dropdown">
                                <a class="nav-link text-dark text-bold" href="index.php">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark text-bold d-flex align-items-center" href="cis.php" role="button" data-bs-toggle="dropdown">CIS</a>
                                <ul class="dropdown-menu">
                                    <li class="list-unstyled"><a class="dropdown-item" href="cis.php">Add Child</a>
                                    </li class="list-unstyled"><a class="dropdown-item" href="view_all.php">View All</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark text-bold d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">User Manager</a>
                                <ul class="dropdown-menu">
                                    <li class="list-unstyled"><a class="dropdown-item" href="#">Add Staff</a></li>
                                    <li class="list-unstyled"><a class="dropdown-item" href="#">View All</a></li>
                                    <li class="list-unstyled"><a class="dropdown-item" href="#">Roles</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <div class="center">
                                    <a class="nav-link text-dark text-bold" href="#" role="button" data-bs-toggle="dropdown">My Profile</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="center">
                                    <a href="#" class="nav-link text-bold text-dark">EXIT</a>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/Mobile Navigation-->
<main class="container-fluid p-0 d-flex">