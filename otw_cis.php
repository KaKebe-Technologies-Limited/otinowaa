<?php include('includes/header.php'); ?><!-- header -->
<?php include('includes/sidebar.php'); ?><!-- sidebar -->

<section class="container">
    <div class="mb-4 pt-4">
        <h4 class="title">Add Child</h4>
    </div>
    <div class="">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active text-dark" data-bs-toggle="tab" href="#home">CBC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="tab" href="#menu1">Residential</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="tab" href="#menu2">Elevate</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="home">...</div>
            <div class="tab-pane container fade" id="menu1">
                <form id="residential-form" class="form-horizontal">
                    <div id="row-1" class="col-sm-12 d-flex justify-content-between">
                        <div class="col-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Completed by:">
                        </div>
                        <div class="col-4">
                            <label></label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div id="row-2">
                        <div class="col-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Child's Name:">
                        </div>
                        <div class="d-flex w-25">
                            <div class="form-check col-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Female</label>
                            </div>                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane container fade" id="menu2">...</div>
        </div>
    </div>
</section>
<?php include ('includes/footer.php'); ?><!-- footer -->