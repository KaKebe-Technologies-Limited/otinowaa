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
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Completed by:">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Child's Name:">
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex justify-content-center align-items-end">
                            <div class="col w-25">
                                <div>Sex</div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">Female</label>
                                </div>                          
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Date</label>
                            <input type="date" class="form-control">
                        </div>  
                    </div>
                    <div class="form-row">
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-3 d-flex flex-column">
                                <div>Place of Birth</div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="District">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="County">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Sub-county">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Parish">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village">
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex flex-column">
                                <div>Place of Birth</div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="District">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="County">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Sub-county">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Parish">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village">
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex flex-column">
                                <div class="col-heading">Place of Birth</div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Nationality">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Tribe">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Clan">
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Religion">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-heading">School Information</div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="col-sm-4">
                                <label></label>
                                <input type="text" class="form-control" placeholder="School Name">
                            </div>
                            <div class="col-sm-2">
                                <label></label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-sm-3 d-flex align-items-center">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Last completed grade">
                                <div class="p-3">
                                    <a href="#"><span class="material-icons">add_circle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between">
                        <div class="col-sm-5">
                            <div class="col-heading">Guardian information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital Status:">
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="number" class="form-control w-45" placeholder="6">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:">
                                </div>  
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100">
                                <label>Vulnerabilities</label>
                                <textarea class="form-control h-100" id="" rows="3"></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between">
                        <div class="col-sm-5">
                            <label>Dependants at home</label>
                            <div class="d-flex justify-content-between">
                                <div class="form-group w-70">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village:">
                                </div>  
                                <div class="form-group d-flex align-items-end w-25">
                                    <label></label>
                                    <input type="text" class="form-control h-39px" placeholder="Age:">
                                    <div class="p-3">
                                        <a href="#"><span class="material-icons">add_circle</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100 h-100">
                                <label>Reason for Admission</label>
                                <textarea class="form-control" id="" rows="3"></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between">
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Paternal Relative</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:">
                                </div>
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Residence">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital status">
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="text" class="form-control w-45" placeholder="6">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:">
                                </div>  
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Maternal Relative</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:">
                                </div>
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Residence">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital status">
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="text" class="form-control w-45" placeholder="6">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:">
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between">
                        <div class="col-sm-5">
                            <div class="col-heading">Father's Information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label>Date of Death</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Cause of Death">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation(If Alive)">
                                </div> 
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Mother's Information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label>Date of Death</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Cause of Death">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation(If Alive)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-heading">More about the child</div>
                        <div class="form-row d-flex justify-content-around">
                            <div class="col-sm-5">
                                <div class="form-group w-100 h-100">
                                    <label></label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>  
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex flex-wrap">
                                    <div class="form-group w-45-mr-5">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="Favorite Game">
                                    </div>
                                    <div class="form-group w-45-ml-5">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="Favorite Subject">
                                    </div>
                                    <div class="form-group w-100 h-100">
                                        <label></label>
                                        <textarea class="form-control h-100" id="" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-5">
                            <div class="col-heading">Siblings already at PATH</div>
                            <div class="form-group d-flex w-100">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Name:">
                                <div class="p-3">
                                    <a href="#"><span class="material-icons">add_circle</span></a>
                                </div>
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