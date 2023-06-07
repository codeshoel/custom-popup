<?php
require('./app/dropdown_option.php');
$state_list = $GLOBALS['app_list_strings']['state_list'];
$lga_list = $GLOBALS['app_list_strings']['lga_list'];
?>
<!DOCTYPE html>     
<html class="no-js">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INEC ELECTORIATE FORM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <!-- SELECT2 CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container mt-5">

                <form class="create-electoriate-form" action="app/pro.php" method="POST">
                    <!-- CALLER INFORMATION -->
                    <div class="card">
                        <div class="card-header">
                            <h6>CALLER INFORMATION</h6>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="name">
                                                <b>Name of the Caller:<span class="text-danger">*</span></b>
                                            </label>
                                            <input type="text" name="name" id="name" size="30" maxlength="150" class="form-control">
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="state_c">
                                                <b>State:</b>
                                            </label>
                                            <select name="state_c" id="state_c" class="select-state-select2 select2-field form-select">
                                                <option>Select State</option>
                                                <?php
                                                    foreach ($state_list as $states => $state) {
                                                        echo '<option value="'.$state.'">'.$state.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="ward_c">
                                                <b>Ward:</b>
                                            </label>
                                            <select name="ward_c" id="ward_c" class="select-ward-select2 select2-field form-select">
                                                <option>Select ward 1</option>
                                                <option>Select ward 2</option>
                                                <option>Select ward 3</option>
                                            </select>
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="assigned_user_name">
                                                <b>REPORTER:</b>
                                            </label>
                                            <input type="text" name="assigned_user_name" id="assigned_user_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="phone_office">
                                                <b>Caller's Number:</b>
                                            </label>
                                            <input type="text" name="phone_office" id="phone_office" class="form-control">
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="lga_c">
                                                <b>LGA/Area Council:</b>
                                            </label>
                                            <select name="lga_c" id="lga_c" class="select-lga-select2 select2-field form-control">
                                               <option>Select LGA</option>
                                            </select>
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="pollingunit_c">
                                                <b>Polling Unit:</b>
                                            </label>
                                            <input type="text" name="pollingunit_c" id="pollingunit_c" class="form-control">
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="supervisor_c">
                                                <b>SUPERVISOR:</b>
                                            </label>
                                            <select name="supervisor_c" id="supervisor_c" class="select-supervisor-select2 select2-field form-select">
                                                <option>Select supervisor 1</option>
                                                <option>Select supervisor 2</option>
                                                <option>Select supervisor 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            


            <!-- NEW INCIDENCE REPORT SECTION  -->
            
                <div class="card mt-2">
                    <div class="card-header">
                        <h6>INCIDENCE REPORT</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="incidence_c">
                                                <b>Incidence Type:<span class="text-danger">*</span></b>
                                            </label>
                                            <input type="text" name="incidence_c" id="incidence_c" class="form-control">
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="election_c">
                                                <b>Election Type:<span class="text-danger">*</span></b>
                                            </label>
                                            <select name="election_c" id="election_c" class="select-election-type-select2 select2-field form-select">
                                                <option value="SS">Election type 1</option>
                                                <option value="SD">Election type 2</option>
                                                <option value="SA">Election type 3</option>
                                            </select>
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="subcategory1_c">
                                                <b>Sub-Category:<span class="text-danger">*</span></b>
                                            </label>
                                            <select name="subcategory1_c" id="subcategory1_c" class="select-ward-select2 select2-field form-select">
                                                <option>Select Sub-Category 1</option>
                                                <option>Select Sub-Category 2</option>
                                                <option>Select Sub-Category 3</option>
                                            </select>
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="description2_c">
                                                <b>Description:</b>
                                            </label>
                                            <textarea name="description2_c" id="description2_c" row="5" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="action1_c">
                                                <b>Action:<span class="text-danger">*</span></b>
                                            </label>
                                            <input type="text" name="action1_c" id="action1_c" class="form-control">
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="category1_c">
                                                <b>Category:<span class="text-danger">*</span></b>
                                            </label>
                                            <select name="category1_c" id="category1_c" class="select-category-select2 select2-field form-control">
                                                <option>Select Category 1</option>
                                                <option>Select Category 2</option>
                                                <option>Select Category 3</option>
                                            </select>
                                        </div>
                                        <p></p>
                                        <div class="col-md-9">
                                            <label for="response1_c">
                                                <b>Response:</b>
                                            </label>
                                            <textarea name="response1_c" id="response1_c" row="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2 mb-5">
                        <input type="submit" name="create_electorate" value="Save" class="btn btn-sm save-electoriate-btn"/>
                        <button class="btn btn-sm save-electoriate-btn">Cancel</button>
                    </div>
                </form>

            </div>


            <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
        <!-- SELECT2 JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="main.js" async defer></script>
    </body>
</html>