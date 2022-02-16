<!--Header-->
<?php
    $title = "View All";
    require("includes/header.php");
    require("includes/dbconnect.php");
?>
<!--/Header-->

<!--Sidebar-->
<?php include 'includes/sidebar.php'; ?>
<!--/Sidebar-->

    <section class="col">

            <div class="wrapper white-bg pb-5">
                <div class="px-5">
                <div class="mb-4 pt-4">
                    <h4 class="section-title">View All</h4>
            </div>
            <ul class="nav nav-pills px-5 p-sm-0 pb-sm-4" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-cbc-tab" data-bs-toggle="pill" data-bs-target="#cbc_search" type="button" role="tab" aria-controls="pills-home" aria-selected="true">CBC</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-residential-tab" data-bs-toggle="pill" data-bs-target="#residential_search" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Residential</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-residential-tab" data-bs-toggle="pill" data-bs-target="#elevate-search" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Elevate</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="cbc_search" role="tabpanel" aria-labelledby="pills-cbc-tab">
            <div class="px-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="search-btn">
                            <form class="form-inline d-flex align-items-center py-3" style="padding-left: 0; padding-right: 0;">
                                <input class="form-control mr-4" style="margin-right: 12px;" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success my-2 my-sm-0" style= "height: 38px;" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="actions d-flex justify-content-between">
                            <div id="file" class="px-2">
                                <a class="text-dark" href=""><span class="material-icons">description</span></a>
                            </div>
                            <div id="print" class="px-2">
                                <a class="text-dark" title="Print" href=""><span class="material-icons">print</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">col</th>
                        <th scope="col">col</th>
                        <th scope="col">col</th>
                        <th scope="col">col</th>
                        <th scope="col">col</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">7</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">8</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">9</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <th scope="row">10</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="residential_search" role="tabpanel" aria-labelledby="pills-residential-tab">...</div>
            <div class="tab-pane fade" id="elevate_search" role="tabpanel" aria-labelledby="pills-residential-tab">...</div>
        </div>
    </div>
</section>
