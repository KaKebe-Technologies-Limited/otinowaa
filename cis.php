<!--Header-->

<?php
      $title = "CIS";
      require("includes/header.php");
?>
<!--/Header-->
<!--Sidebar-->
<?php include('includes/sidebar.php'); ?>
<!--/Sidebar-->

<section class="cis-form col">
    <div class="wrapper col white-bg">
        <div class="px-4">
            <div class="mb-4 pt-4">
                <h4 class="section-title">Add Child</h4>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-pills px-5 p-sm-0 pb-sm-4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#cbc">CBC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#residence">Residential</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#elevate">Elevate</a>
                </li>
            </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="cbc">
                <!-- CBC FORM -->
                <form id="cbc-form" class="form-horizontal container">
                    <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="form-group w-45">
                                <input type="text" class="input-control" id="name" placeholder="Completed by:" name="name">
                                <label class="label-helper" for="name">Completed by</label>
                            </div>
                            <div class="form-group w-27">
                                <label>Date</label>
                                <input type="date" class="input-control" id="date">
                            </div>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-between align-items-end flex-wrap">
                            <div class="form-group w-45">
                                <input type="text" class="input-control" placeholder="Child's Name:" name="childs_name" value="" >
                                <label class="label-helper" for="name">Child's Name</label>
                            </div>
                            <div class="form-group w-25">
                                <div style="text-align: center;">Gender</div>
                                <div class="d-flex justify-content-center mt-4 px-2">
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
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="input-control" id="date">
                            </div>
                        </div>
                    </div>

                    <!-- application of the php code starts here -->
                    <div class="form-row row gx-5">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-sm-12 col-md-5 col-lg-3 d-flex flex-column">
                                <div class="col-heading">Place of Birth</div>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <input type="text" id="district" class="input-control" placeholder="District" name="pb_district" value="" >
                                        <label class="label-helper" for="district">District</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="county" class="input-control" placeholder="County" name="pb_county" value="" >
                                        <label class="label-helper" for="county">County</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="sub-county" class="input-control" placeholder="Sub-county" name="pb_subcounty" value="" >
                                        <label class="label-helper" for="sub-county">Sub-county</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="parish" class="input-control" placeholder="Parish" name="pb_parish" value="" >
                                        <label class="label-helper" for="parish">Parish</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="village" class="input-control" placeholder="Village" name="pb_village" value="" >
                                        <label class="label-helper" for="village">Village</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3 d-flex flex-column">
                                <div class="col-heading">Current Residence</div>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <input type="text" id="district" class="input-control" placeholder="District" name="cr_district" value="" >
                                        <label class="label-helper" for="district">District</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="county" class="input-control" placeholder="County" name="cr_county" value="" >
                                        <label class="label-helper" for="county">County</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="sub-county" class="input-control" placeholder="Sub-county" name="cr_subcounty" value="" >
                                        <label class="label-helper" for="sub-county">Sub-county</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="parish" class="input-control" placeholder="Parish" name="cr_parish" value="" >
                                        <label class="label-helper" for="parish">Parish</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="village" class="input-control" placeholder="Village" name="cr_village" value="" >
                                        <label class="label-helper" for="village">Village</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5 col-lg-3 d-flex flex-column">
                                <div class="col-heading">Origin</div>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <input type="text" id="nationality" class="input-control" placeholder="Nationality" name="nationality" value="" >
                                        <label class="label-helper" for="nationality">Nationality</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="tribe" class="input-control" placeholder="Tribe" name="tribe" value="" >
                                        <label class="label-helper" for="tribe">Tribe</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="clan" class="input-control" placeholder="Clan" name="clan" value="" >
                                        <label class="label-helper" for="clan">Clan</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="religion" class="input-control" placeholder="Religion" name="religion" value="" >
                                        <label class="label-helper" for="religion">Religion</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-heading">School Information</div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap mt-4">
                            <div class="form-group col-sm-4">
                                <input type="text" id="school_name" class="input-control" placeholder="School Name" name="school_name" value="" >
                                <label class="label-helper" for="school_name">School Name</label>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="date">Date</label>
                                <input type="date" id="date" class="input-control" name="date" value="" >
                            </div>
                            <div class="form-group col-sm-4 d-flex align-items-center">
                                <input type="text" id="last_grade_completed" class="input-control" placeholder="Last completed grade" name="last_grade_completed" value="" >
                                <label class="label-helper" for="last_grade_completed">Last Grade Completed</label>
                                <div class="p-3">
                                    <a class="form-anchor" href="#"><span class="material-icons text-dark">add_circle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row gx-5 d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Guardian information</div>
                            <div class="d-flex flex-wrap justify-content-between mt-4">
                                <div class="form-group col-12">
                                    <input type="text" id="guardian_name" class="input-control" placeholder="Name:" name="guardian_name" value="" >
                                    <label class="label-helper" for="guardian_name">Guardian Name</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="relationship" class="input-control" placeholder="Relationship:" name="guardian_relationship" value="" >
                                    <label class="label-helper" for="relationship">Relationship</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="marital_status" class="input-control" placeholder="Marital Status:" name="guardian_marital_status" value="" >
                                    <label class="label-helper" for="marital_status">Marital Status</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5 d-flex align-items-end">
                                    <label for="number_pf_dependants">Number of Dependants</label>
                                    <input type="number" id="number_of_dependants" class="input-control w-45" placeholder="6" name="guardian_no_of_dependants" value="" >
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation:" name="guardian_occupattion" value="" >
                                    <label class="label-helper" for="occupation">Occupation</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="contact-number" class="input-control" placeholder="Contact Number:" name="guardian_contact_no" value="" >
                                    <label class="label-helper" for="contact_number">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100">
                                <div class="col-heading">Vulnerabilities</div>
                                <textarea class="input-control h-100 mt-4" id="" rows="3" placeholder="Provide vulnerabilitites for the child" name="guardian_vulnerabilities" value="" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Dependants at home</div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div class="form-group w-65">
                                    <input type="text" id="name" class="input-control" placeholder="Name" name="Name" value="" >
                                    <label class="label-helper" for="name">Name</label>
                                </div>
                                <div class="form-group d-flex align-items-end w-33">
                                    <input type="text" id="age" class="input-control" placeholder="Age:" name="age" value="" >
                                    <label class="label-helper" for="age">Age</label>
                                    <div class="p-3">
                                        <a class="form-anchor" href="#"><span class="material-icons text-dark">add_circle</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100 h-100">
                                <div class="col-heading">Reason for Admission</div>
                                <textarea class="input-control mt-4" id="" rows="3" placeholder="Reason for Admission" name="reason_for_admission" value="" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Paternal Relative</div>
                            <div class="d-flex flex-wrap mt-4">
                                <div class="form-group w-100">
                                    <input type="text" id="paternal_name" class="input-control" placeholder="Name:" name="paternal_name" value="" >
                                    <label class="label-helper" for="paternal_name">Paternal Name</label>
                                </div>
                                <div class="form-group w-100">
                                    <input type="text" id="residence" class="input-control" placeholder="Residence" name="residence" value="" >
                                    <label class="label-helper" for="paternal_residence">Residence</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="relationship" class="input-control" placeholder="Relationship:" name="relationship" value="" >
                                    <label class="label-helper" for="paternal_relationship">Relationship</label>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="marital_status" class="input-control" placeholder="Marital status" name="marital_status" value="" >
                                    <label class="label-helper" for="paternal_marital_status">Marital Status</label>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label for="number_pf_dependants">Number of Dependants</label>
                                    <input type="number" id="paternal_no_of_dependants" class="input-control w-45" placeholder="6" name="number_of_dependants" value="" >
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation:" name="occupattion" value="" >
                                    <label class="label-helper" for="paternal_occupation">Occupation</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="contact-number" class="input-control" placeholder="Contact Number:" name="contact_number" value="" >
                                    <label class="label-helper" for="paternal_contact_no">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Maternal Relative</div>
                            <div class="d-flex flex-wrap">
                            <div class="form-group w-100 mt-4">
                                    <input type="text" id="paternal_name" class="input-control" placeholder="Name:" name="paternal_name" value="" >
                                    <label class="label-helper" for="maternal_name">Maternal Name</label>
                                </div>
                                <div class="form-group w-100">
                                    <input type="text" id="residence" class="input-control" placeholder="Residence" name="residence" value="" >
                                    <label class="label-helper" for="maternal_residence">Residence</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="relationship" class="input-control" placeholder="Relationship:" name="relationship" value="" >
                                    <label class="label-helper" for="maternal_relationship">Relationship</label>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="marital_status" class="input-control" placeholder="Marital status" name="marital_status" value="" >
                                    <label class="label-helper" for="maternal_marital_status">Marital Status</label>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label for="number_pf_dependants">Number of Dependants</label>
                                    <input type="number" id="number_of_dependants" class="input-control w-45" placeholder="6" name="maternal_no_of_dependants" value="" >
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation:" name="matrnal_occupation" value="" >
                                    <label class="label-helper" for="occupation">Occupation</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="contact-number" class="input-control" placeholder="Contact Number:" name="maternal_contact_no" value="" >
                                    <label class="label-helper" for="contact_number">Contact Number</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Father's Information</div>
                            <div class="d-flex flex-wrap mt-4">
                                <div class="form-group w-100">
                                    <input type="text" id="fathers_name" class="input-control" placeholder="Name:" name="fathers_name" value="" >
                                    <label class="label-helper" for="fathers_name">Father's Name</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label for="date_of_death">Date of Death</label>
                                    <input type="date" id="date_of_death" class="input-control" name="fathers_date_of_death" value="" >
                                </div>
                                <div class="form-group w-45-ml-5 d-flex align-items-end">
                                    <input type="text" id="cause_of_death" class="input-control" placeholder="Cause of Death" name="fathers_cause_of_death" value="" >
                                    <label class="label-helper" for="cause_of_death">Cause of Death</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation(If Alive)" name="fathers_occupation" value="" >
                                    <label class="label-helper" for="fathers_occupation">Occupation(If alive)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Mother's Information</div>
                            <div class="d-flex flex-wrap mt-4">
                                <div class="form-group w-100">
                                    <input type="text" id="mother_name" class="input-control" placeholder="Name:" name="mother_name" value="" >
                                    <label class="label-helper" for="mothers_name">Mother's Name</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label for="date_of_death">Date of Death</label>
                                    <input type="date" id="date_of_death" class="input-control" name="mothers_date_of_death" value="" >
                                </div>
                                <div class="form-group w-45-ml-5 d-flex align-items-end">
                                    <input type="text" id="cause_of_death" class="input-control" placeholder="Cause of Death" name="mothers_cause_of_death" value="" >
                                    <label class="label-helper" for="cause_of_death">Cause of Death</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation(If Alive)" name="mothers_occupation" value="" >
                                    <label class="label-helper" for="occupation">Occupation(If alive)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-heading">More about the child</div>
                        <div class="form-row row d-flex justify-content-between flex-wrap mt-4">
                            <div class="col-sm-5">
                                <div class="form-group w-100 h-100">

                                    <textarea class="input-control" id="" rows="3" placeholder="Provide more information about the child here." name="more_about_child" value="" ></textarea>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex flex-wrap">
                                    <div class="form-group w-45-mr-5">
                                        <input type="text" id="favorite_game" class="input-control" placeholder="Favorite Game" name="favorite_game" value="" >
                                        <label class="label-helper" for="favorite_game">Favorite Game</label>
                                    </div>
                                    <div class="form-group w-45-ml-5">
                                        <input type="text" id="favorite_subject" class="input-control" placeholder="Favorite subject" name="favorite_subject" value="" >
                                        <label class="label-helper" for="date_of_death">Favorite_subject</label>
                                    </div>
                                    <div class="form-group w-100 h-100">
                                        <textarea class="input-control h-100 mt-2" id="" rows="3" placeholder="Career goals:" name="career_goal" value="" ></textarea>
                                        <label class="label-helper">Career Goals</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-sm-5">
                            <div class="col-heading">Siblings already at PATH</div>
                            <div class="form-group d-flex w-100 mt-4">
                                <input type="text" class="input-control" placeholder="Name:" name="name" value="" >
                                <label class="label-helper" for="Name">Name</label>
                                <div class="p-3">
                                    <a class="form-anchor" href="#"><span class="material-icons text-dark">add_circle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-sm-12">
                            <div class="form-group d-flex justify-content-center py-5">
                                <button type="submit" class="btn dark-coral-bg w-45">Submit</button>
                            </div>
                        </div>
                    </div>
                </form><!--/CBC FORM -->
            </div>
            <div class="tab-pane container fade" id="residence">
            <!-- RESIDENTIAL FORM -->
            <form id="residential-form" class="form-horizontal">
            <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="form-group w-45">
                                <input type="text" class="input-control" id="name" placeholder="Completed by:" name="name">
                                <label class="label-helper" for="name">Completed by</label>
                            </div>
                            <div class="form-group w-27">
                                <label>Date</label>
                                <input type="date" class="input-control" id="date">
                            </div>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-between align-items-end flex-wrap">
                            <div class="form-group w-45">
                                <input type="text" class="input-control" placeholder="Child's Name:" name="childs_name" value="" >
                                <label class="label-helper" for="name">Child's Name</label>
                            </div>
                            <div class="form-group w-25">
                                <div style="text-align: center;">Gender</div>
                                <div class="d-flex justify-content-center mt-4 px-2">
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
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="input-control" id="date">
                            </div>
                        </div>
                    </div>
                    <div class="form-row row gx-5">
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="col-sm-12 col-md-3 d-flex flex-column">
                                <div class="col-heading">Place of Birth</div>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <input type="text" id="district" class="input-control" placeholder="District" name="district" value="" >
                                        <label class="label-helper" for="district">District</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="county" class="input-control" placeholder="County" name="county" value="" >
                                        <label class="label-helper" for="county">County</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="sub-county" class="input-control" placeholder="Sub-county" name="sub_county" value="" >
                                        <label class="label-helper" for="sub-county">Sub-county</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="parish" class="input-control" placeholder="Parish" name="parish" value="" >
                                        <label class="label-helper" for="parish">Parish</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="village" class="input-control" placeholder="Village" name="village" value="" >
                                        <label class="label-helper" for="village">Village</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 d-flex flex-column">
                                <div class="col-heading">Current Residence</div>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <input type="text" id="district" class="input-control" placeholder="District" name="district" value="" >
                                        <label class="label-helper" for="district">District</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="county" class="input-control" placeholder="County" name="county" value="" >
                                        <label class="label-helper" for="county">County</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="sub-county" class="input-control" placeholder="Sub-county" name="sub_county" value="" >
                                        <label class="label-helper" for="sub-county">Sub-county</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="parish" class="input-control" placeholder="Parish" name="parish" value="" >
                                        <label class="label-helper" for="parish">Parish</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="village" class="input-control" placeholder="Village" name="village" value="" >
                                        <label class="label-helper" for="village">Village</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 d-flex flex-column">
                                <div class="col-heading">Origin</div>
                                <div class="mt-4">
                                    <div class="form-group">
                                        <input type="text" id="nationality" class="input-control" placeholder="Nationality" name="nationality" value="" >
                                        <label class="label-helper" for="nationality">Nationality</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="tribe" class="input-control" placeholder="Tribe" name="tribe" value="" >
                                        <label class="label-helper" for="tribe">Tribe</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="clan" class="input-control" placeholder="Clan" name="clan" value="" >
                                        <label class="label-helper" for="clan">Clan</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="religion" class="input-control" placeholder="Religion" name="religion" value="" >
                                        <label class="label-helper" for="religion">Religion</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-heading">School Information</div>
                        <div class="d-flex justify-content-between align-items-end flex-wrap mt-4">
                            <div class="form-group col-sm-4">
                                <input type="text" id="school_name" class="input-control" placeholder="School Name" name="school_name" value="" >
                                <label class="label-helper" for="school_name">School Name</label>
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="date">Date</label>
                                <input type="date" id="date" class="input-control" name="date" value="" >
                            </div>
                            <div class="form-group col-sm-4 d-flex align-items-center">
                                <input type="text" id="last_grade_completed" class="input-control" placeholder="Last completed grade" name="last_grade_completed" value="" >
                                <label class="label-helper" for="last_grade_completed">Last Grade Completed</label>
                                <div class="p-3">
                                    <a class="form-anchor" href="#"><span class="material-icons text-dark">add_circle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row gx-5 d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Guardian information</div>
                            <div class="d-flex flex-wrap justify-content-between mt-4">
                                <div class="form-group col-12">
                                    <input type="text" id="guardian_name" class="input-control" placeholder="Name:" name="guardian_name" value="" >
                                    <label class="label-helper" for="guardian_name">Guardian Name</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="relationship" class="input-control" placeholder="Relationship:" name="relationship" value="" >
                                    <label class="label-helper" for="relationship">Relationship</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="marital_status" class="input-control" placeholder="Marital Status:" name="marital_status" value="" >
                                    <label class="label-helper" for="marital_status">Marital Status</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5 d-flex align-items-end">
                                    <label for="number_pf_dependants">Number of Dependants</label>
                                    <input type="number" id="number_of_dependants" class="input-control w-45" placeholder="6" name="number_of_dependants" value="" >
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation:" name="occupattion" value="" >
                                    <label class="label-helper" for="occupation">Occupation</label>
                                </div>
                                <div class="form-group col-sm-12 col-md-5">
                                    <input type="text" id="contact-number" class="input-control" placeholder="Contact Number:" name="contact_number" value="" >
                                    <label class="label-helper" for="contact_number">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100">
                                <div class="col-heading">Vulnerabilities</div>
                                <textarea class="input-control h-100 mt-4" id="" rows="3" placeholder="Provide vulnerabilitites for the child" name="vulnerabilities" value="" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Dependants at home</div>
                            <div class="d-flex justify-content-between align-items-end mt-4">
                                <div class="form-group w-65">
                                    <input type="text" id="name" class="input-control" placeholder="Name" name="Name" value="" >
                                    <label class="label-helper" for="name">Name</label>
                                </div>
                                <div class="form-group d-flex align-items-end w-33">
                                    <input type="text" id="age" class="input-control" placeholder="Age:" name="age" value="" >
                                    <label class="label-helper" for="age">Age</label>
                                    <div class="p-3">
                                        <a class="form-anchor" href="#"><span class="material-icons text-dark">add_circle</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group w-100 h-100">
                                <div class="col-heading">Reason for Admission</div>
                                <textarea class="input-control mt-4" id="" rows="3" placeholder="Reason for Admission" name="reason_for_admission" value="" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Paternal Relative</div>
                            <div class="d-flex flex-wrap mt-4">
                                <div class="form-group w-100">
                                    <input type="text" id="paternal_name" class="input-control" placeholder="Name:" name="paternal_name" value="" >
                                    <label class="label-helper" for="paternal_name">Paternal Name</label>
                                </div>
                                <div class="form-group w-100">
                                    <input type="text" id="residence" class="input-control" placeholder="Residence" name="residence" value="" >
                                    <label class="label-helper" for="residence">Residence</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="relationship" class="input-control" placeholder="Relationship:" name="relationship" value="" >
                                    <label class="label-helper" for="relationship">Relationship</label>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="marital_status" class="input-control" placeholder="Marital status" name="marital_status" value="" >
                                    <label class="label-helper" for="marital_status">Marital Status</label>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                    <label for="number_pf_dependants">Number of Dependants</label>
                                    <input type="number" id="number_of_dependants" class="input-control w-45" placeholder="6" name="number_of_dependants" value="" >
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation:" name="occupattion" value="" >
                                    <label class="label-helper" for="occupation">Occupation</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="contact-number" class="input-control" placeholder="Contact Number:" name="contact_number" value="" >
                                    <label class="label-helper" for="contact_number">Contact Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Closest Maternal Relative</div>
                            <div class="d-flex flex-wrap">
                            <div class="form-group w-100 mt-4">
                                    <input type="text" id="paternal_name" class="input-control" placeholder="Name:" name="paternal_name" value="" >
                                    <label class="label-helper" for="paternal_name">Maternal Name</label>
                                </div>
                                <div class="form-group w-100">
                                    <input type="text" id="residence" class="input-control" placeholder="Residence" name="residence" value="" >
                                    <label class="label-helper" for="residence">Residence</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="relationship" class="input-control" placeholder="Relationship:" name="relationship" value="" >
                                    <label class="label-helper" for="relationship">Relationship</label>
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="marital_status" class="input-control" placeholder="Marital status" name="marital_status" value="" >
                                    <label class="label-helper" for="marital_status">Marital Status</label>
                                </div>
                                <div class="form-group d-flex align-items-end w-45-mr-5">
                                <label for="number_pf_dependants">Number of Dependants</label>
                                    <input type="number" id="number_of_dependants" class="input-control w-45" placeholder="6" name="number_of_dependants" value="" >
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation:" name="occupattion" value="" >
                                    <label class="label-helper" for="occupation">Occupation</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="contact-number" class="input-control" placeholder="Contact Number:" name="contact_number" value="" >
                                    <label class="label-helper" for="contact_number">Contact Number</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row d-flex justify-content-between flex-wrap">
                        <div class="col-sm-5">
                            <div class="col-heading">Father's Information</div>
                            <div class="d-flex flex-wrap mt-4">
                                <div class="form-group w-100">
                                    <input type="text" id="fathers_name" class="input-control" placeholder="Name:" name="fathers_name" value="" >
                                    <label class="label-helper" for="fathers_name">Father's Name</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label for="date_of_death">Date of Death</label>
                                    <input type="date" id="date_of_death" class="input-control" name="date_of_death" value="" >
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="cause_of_death" class="input-control" placeholder="Cause of Death" name="cause_of_death" value="" >
                                    <label class="label-helper" for="cause_of_death">Cause of Death</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation(If Alive)" name="occupation" value="" >
                                    <label class="label-helper" for="occupation">Occupation(If alive)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-heading">Mother's Information</div>
                            <div class="d-flex flex-wrap mt-4">
                                <div class="form-group w-100">
                                    <input type="text" id="mother_name" class="input-control" placeholder="Name:" name="mother_name" value="" >
                                    <label class="label-helper" for="mothers_name">Mother's Name</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <label for="date_of_death">Date of Death</label>
                                    <input type="date" id="date_of_death" class="input-control" name="date_of_death" value="" >
                                </div>
                                <div class="form-group w-45-ml-5">
                                    <input type="text" id="cause_of_death" class="input-control" placeholder="Cause of Death" name="cause_of_death" value="" >
                                    <label class="label-helper" for="cause_of_death">Cause of Death</label>
                                </div>
                                <div class="form-group w-45-mr-5">
                                    <input type="text" id="occupation" class="input-control" placeholder="Occupation(If Alive)" name="occupation" value="" >
                                    <label class="label-helper" for="occupation">Occupation(If alive)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-heading">More about the child</div>
                        <div class="form-row row d-flex justify-content-between flex-wrap mt-4">
                            <div class="col-sm-5">
                                <div class="form-group w-100 h-100">

                                    <textarea class="input-control" id="" rows="3" placeholder="Provide more information about the child here." name="more_about_child" value="" ></textarea>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="d-flex flex-wrap">
                                    <div class="form-group w-45-mr-5">
                                        <input type="text" id="favorite_game" class="input-control" placeholder="Favorite Game" name="favorite_game" value="" >
                                        <label class="label-helper" for="favorite_game">Favorite Game</label>
                                    </div>
                                    <div class="form-group w-45-ml-5">
                                        <input type="text" id="favorite_subject" class="input-control" placeholder="Favorite subject" name="favorite_subject" value="" >
                                        <label class="label-helper" for="date_of_death">Favorite_subject</label>
                                    </div>
                                    <div class="form-group w-100 h-100">
                                        <textarea class="input-control h-100 mt-2" id="" rows="3" placeholder="Career goals:" name="career_goal" value="" ></textarea>
                                        <label class="label-helper">Career Goals</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-sm-5">
                            <div class="col-heading">Siblings already at PATH</div>
                            <div class="form-group d-flex w-100 mt-4">
                                <input type="text" class="input-control" placeholder="Name:" name="name" value="" >
                                <label class="label-helper" for="Name">Name</label>
                                <div class="p-3">
                                    <a class="form-anchor" href="#"><span class="material-icons text-dark">add_circle</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row row">
                        <div class="col-sm-12">
                            <div class="form-group d-flex justify-content-center py-5">
                                <button type="submit" class="btn dark-coral-bg w-45">Submit</button>
                            </div>
                        </div>
                    </div>
                </form><!--/RESIDENTIAL FORM -->
            </div>
            <div class="tab-pane container fade" id="elevate">
                <!-- ELEVATE FORM -->
                <!-- <form></form> -->
            </div>
        </div>
    </div>
</section>
<?php include ('includes/footer.php'); ?><!-- footer -->