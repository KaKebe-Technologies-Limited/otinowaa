<!--Header-->


<?php
    $title = "Dashboard";
    require("includes/header.php");
    require("includes/dbconnect.php");
?>
<!--/Header-->

<!--Sidebar-->
<?php include('includes/sidebar.php'); ?>
<!--/Sidebar-->

<!-- dashboard -->
    <section id="dashboard" class="container col-8 pt-5">
        <div class="row">
            <div class="mb-4 pt-5">
                <h4 class="title">Welcome back, Stephen!</h4>
                <h6>Today is Thursday, 20 January 2022</h6>
            </div>
            <div class="col d-flex flex-wrap justify-content-center align-items-center">
                <div class="card white-bg col-3">
                    <a class="card-link stretched-link" href="cis.php">CIS</a>
                </div>
                <div class="card white-bg col-3">
                    <a class="card-link stretched-link" target="blank" href="http://cafe.otwsystems.org/login">Otino Waa Tower Cafe</a>
                </div>
                <div class="card white-bg col-3">
                    <a class="card-link stretched-link" href="http://cafe.otwsystems.org/login">Otino Waa Path Cafe</a>
                </div>
                <div class="card white-bg col-3">
                    <a class="card-link stretched-link" href="http://cafe.otwsystems.org/login">Otino Waa Clinic</a>
                </div>
                <div class="card white-bg col-3">
                    <a class="card-link stretched-link" href="http://cafe.otwsystems.org/login"> Otino Waa SS</a>
                </div>
                <div class="card white-bg col-3">
                    <a class="card-link stretched-link" href="http://cafe.otwsystems.org/login">Otino Waa Primary School</a>
                </div>
            </div>
        </div>
    </section>
</main>