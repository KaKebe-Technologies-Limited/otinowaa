<?php include('includes/header.php'); ?><!-- header -->
<?php include('includes/sidebar.php'); ?><!-- sidebar -->

<section class="container">
    <div class="wrapper white-bg">
        <div class="mb-4 pt-4">
            <h4 class="section-title">Add Child</h4>
        </div>
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
            <div class="tab-pane container active" id="home">
            <form id="cbc-form" class="form-horizontal">
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" class="form-control" placeholder="Completed by:" name="name" value="" required>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Child's Name:" name="childs_name" value="" required>
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
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-sm-3 d-flex flex-column">
                                <div>Place of Birth</div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="District" name="district" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="County" name="county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Sub-county" name="sub_county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Parish" name="parish" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village" name="village" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex flex-column">
                                <div>Current Residence</div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="District" name="district" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="County" name="county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Sub-county" name="sub_county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Parish" name="parish" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village" name="village" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex flex-column">
                                <div class="col-heading">Origin</div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Nationality" name="nationality" value="" required>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Tribe" name="tribe" value="" required>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Clan" name="clan" value="" required>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Religion" name="religion" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-heading">School Information</div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <div class="form-group col-sm-4">
                                <label></label>
                                <input type="text" class="form-control" placeholder="School Name" name="school_name" value="" required>
                            </div>
                            <div class="form-group col-sm-2">
                                <label></label>
                                <input type="date" class="form-control" name="date" value="" required>
                            </div>
                            <div class="form-group col-sm-3 d-flex align-items-center">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Last completed grade" name="last_grade_completed" value="" required>
                                <div class="p-3">
                                    <a href="#"><span class="material-icons">add_circle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Guardian information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="guardian_name" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:" name="relationship" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital Status:" name="marital_status" value="" required>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="number" class="form-control w-45" placeholder="6" name="number_of_dependants" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:" name="occupattion" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:" name="contact_number" value="" required>
                                </div>  
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100">
                                <label>Vulnerabilities</label>
                                <textarea class="form-control h-100" id="" rows="3" name="vulnerabilities" value="" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <label>Dependants at home</label>
                            <div class="d-flex justify-content-between">
                                <div class="form-group w-65">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village:" name="village" value="" required>
                                </div>  
                                <div class="form-group d-flex align-items-end w-30">
                                    <label></label>
                                    <input type="text" class="form-control h-39px" placeholder="Age:" name="age" value="" required>
                                    <div class="p-3">
                                        <a href="#"><span class="material-icons">add_circle</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100 h-100">
                                <label>Reason for Admission</label>
                                <textarea class="form-control" id="" rows="3" name="reason_for_admission" value="" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Paternal Relative</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="paternal_name" value="" required>
                                </div>
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Residence" name="residence" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:" name="relationship" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital status" name="marital_status" value="" required>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="text" class="form-control w-45" placeholder="6" name="number_of_dependants" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:" name="occupattion">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:" name="contact_number" value="" required>
                                </div>  
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Maternal Relative</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="maternal_name" value="" required>
                                </div>
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Residence" name="maternal_residence" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:" name="maternal_residence" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital status" name="marital_status" value="" required>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="text" class="form-control w-45" placeholder="6" name="number_of_dependants" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:" name="occupattion" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:" name="contact_number" value="" required>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Father's Information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="fathers_name" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label>Date of Death</label>
                                    <input type="date" class="form-control" name="date_of_death" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Cause of Death" name="cause_of_death" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation(If Alive)" name="occupation" value="" required>
                                </div> 
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Mother's Information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="mother_name" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label>Date of Death</label>
                                    <input type="date" class="form-control" name="date_of_death" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Cause of Death" name="cause_of_death" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation(If Alive)" name="occupation" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-heading">More about the child</div>
                        <div class="form-row d-flex justify-content-around flex-wrap">
                            <div class="col-sm-5">
                                <div class="form-group w-100 h-100">
                                    <label></label>
                                    <textarea class="form-control" id="" rows="3" name="more_about_child" value="" required></textarea>
                                </div>  
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex flex-wrap">
                                    <div class="form-group w-45-mr-5">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="Favorite Game" name="favorite_game" value="" required>
                                    </div>
                                    <div class="form-group w-45-ml-5">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="Favorite Subject" name="favorite_subject" value="" required>
                                    </div>
                                    <div class="form-group w-100 h-100">
                                        <label></label>
                                        <textarea class="form-control h-100" id="" rows="3" placeholder="Career goal:" name="career_goal" value="" required></textarea>
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
                                <input type="text" class="form-control" placeholder="Name:" name="name" value="" required>
                                <div class="p-3">
                                    <a href="#"><span class="material-icons">add_circle</span></a>
                                </div>
                            </div>
                        </div>          
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn dark-coral-bg w-45">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane container fade" id="menu1">
            <form id="residential-form" class="form-horizontal">
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" class="form-control" placeholder="Completed by:" name="name" value="" required>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Child's Name:" name="childs_name" value="" required>
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
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-sm-3 d-flex flex-column">
                                <div>Place of Birth</div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="District" name="district" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="County" name="county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Sub-county" name="sub_county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Parish" name="parish" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village" name="village" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex flex-column">
                                <div>Current Residence</div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="District" name="district" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="County" name="county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Sub-county" name="sub_county" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Parish" name="parish" value="" required>
                                </div>
                                <div class="">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village" name="village" value="" required>
                                </div>
                            </div>
                            <div class="col-sm-3 d-flex flex-column">
                                <div class="col-heading">Origin</div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Nationality" name="nationality" value="" required>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Tribe" name="tribe" value="" required>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Clan" name="clan" value="" required>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Religion" name="religion" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-heading">School Information</div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <div class="form-group col-sm-4">
                                <label></label>
                                <input type="text" class="form-control" placeholder="School Name" name="school_name" value="" required>
                            </div>
                            <div class="form-group col-sm-2">
                                <label></label>
                                <input type="date" class="form-control" name="date" value="" required>
                            </div>
                            <div class="form-group col-sm-3 d-flex align-items-center">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Last completed grade" name="last_grade_completed" value="" required>
                                <div class="p-3">
                                    <a href="#"><span class="material-icons">add_circle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Guardian information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="guardian_name" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:" name="relationship" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital Status:" name="marital_status" value="" required>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="number" class="form-control w-45" placeholder="6" name="number_of_dependants" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:" name="occupattion" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:" name="contact_number" value="" required>
                                </div>  
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100">
                                <label>Vulnerabilities</label>
                                <textarea class="form-control h-100" id="" rows="3" name="vulnerabilities" value="" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <label>Dependants at home</label>
                            <div class="d-flex justify-content-between">
                                <div class="form-group w-65">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Village:" name="village" value="" required>
                                </div>  
                                <div class="form-group d-flex align-items-end w-30">
                                    <label></label>
                                    <input type="text" class="form-control h-39px" placeholder="Age:" name="age" value="" required>
                                    <div class="p-3">
                                        <a href="#"><span class="material-icons">add_circle</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100 h-100">
                                <label>Reason for Admission</label>
                                <textarea class="form-control" id="" rows="3" name="reason_for_admission" value="" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Paternal Relative</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="paternal_name" value="" required>
                                </div>
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Residence" name="residence" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:" name="relationship" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital status" name="marital_status" value="" required>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="text" class="form-control w-45" placeholder="6" name="number_of_dependants" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:" name="occupattion">
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:" name="contact_number" value="" required>
                                </div>  
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Maternal Relative</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="maternal_name" value="" required>
                                </div>
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Residence" name="maternal_residence" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Relationship:" name="maternal_residence" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Marital status" name="marital_status" value="" required>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label>Number of Dependants</label>
                                    <input type="text" class="form-control w-45" placeholder="6" name="number_of_dependants" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation:" name="occupattion" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Contact Number:" name="contact_number" value="" required>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Father's Information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="fathers_name" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label>Date of Death</label>
                                    <input type="date" class="form-control" name="date_of_death" value="" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Cause of Death" name="cause_of_death" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation(If Alive)" name="occupation" value="" required>
                                </div> 
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Mother's Information</div>
                            <div class="d-flex flex-wrap">
                                <div class="form-group w-100">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Name:" name="mother_name" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label>Date of Death</label>
                                    <input type="date" class="form-control" name="date_of_death" required>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Cause of Death" name="cause_of_death" value="" required>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Occupation(If Alive)" name="occupation" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-heading">More about the child</div>
                        <div class="form-row d-flex justify-content-around flex-wrap">
                            <div class="col-sm-5">
                                <div class="form-group w-100 h-100">
                                    <label></label>
                                    <textarea class="form-control" id="" rows="3" name="more_about_child" value="" required></textarea>
                                </div>  
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex flex-wrap">
                                    <div class="form-group w-45-mr-5">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="Favorite Game" name="favorite_game" value="" required>
                                    </div>
                                    <div class="form-group w-45-ml-5">
                                        <label></label>
                                        <input type="text" class="form-control" placeholder="Favorite Subject" name="favorite_subject" value="" required>
                                    </div>
                                    <div class="form-group w-100 h-100">
                                        <label></label>
                                        <textarea class="form-control h-100" id="" rows="3" placeholder="Career goal:" name="career_goal" value="" required></textarea>
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
                                <input type="text" class="form-control" placeholder="Name:" name="name" value="" required>
                                <div class="p-3">
                                    <a href="#"><span class="material-icons">add_circle</span></a>
                                </div>
                            </div>
                        </div>          
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn dark-coral-bg w-45">Submit</button>
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