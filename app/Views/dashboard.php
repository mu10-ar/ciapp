<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/dropdown.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>

<body>


    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Arkham Asylum</h3>
                <strong>BS</strong>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Admin
                    </a>
                </li>
                <li>
                    <a href="#departmentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Department
                    </a>
                    <ul class="collapse list-unstyled" id="departmentSubmenu">
                        <li>
                            <a href="#">Add Department</a>
                        </li>
                        <li>
                            <a href="#">Department List</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#doctorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Doctors
                    </a>
                    <ul class="collapse list-unstyled" id="doctorSubmenu">
                        <li>
                            <a href="/home/createdoctor">Add Docotr</a>
                        </li>
                        <li>
                            <a href="#">Doctors List</a>
                        </li>
                        <!-- <li>
                            <a href="#">Page 3</a>
                        </li> -->
                    </ul>
                </li>


                <li>
                    <a href="#nurseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Nurse
                    </a>
                    <ul class="collapse list-unstyled" id="nurseSubmenu">
                        <li>
                            <a href="#">Add Nurse</a>
                        </li>
                        <li>
                            <a href="#">Nurses List</a>
                        </li>
                        <li>
                            <a href="#">Alot Bed</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pharmacySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Pharmacy
                    </a>
                    <ul class="collapse list-unstyled" id="pharmacySubmenu">
                        <li>
                            <a href="#">Add Medicine</a>
                        </li>
                        <li>
                            <a href="#">Medicine List</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#patientSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Patient
                    </a>
                    <ul class="collapse list-unstyled" id="patientSubmenu">
                        <li>
                            <a href="#">Add Patient</a>
                        </li>
                        <li>
                            <a href="#">Patient List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#appointmentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Appointment
                    </a>
                    <ul class="collapse list-unstyled" id="appointmentSubmenu">
                        <li>
                            <a href="#">Add Appointment</a>
                        </li>
                        <li>
                            <a href="#">Appointment List</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#prescriptionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Prescription
                    </a>
                    <ul class="collapse list-unstyled" id="prescriptionSubmenu">
                        <li>
                            <a href="#">Add Patient Case Study</a>
                        </li>
                        <li>
                            <a href="#">Patient Case Study list</a>
                        </li>
                        <li>
                            <a href="#">Add Prescription</a>
                        </li>
                        <li>
                            <a href="#">Prescription List</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#bedSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Bed Manager
                    </a>
                    <ul class="collapse list-unstyled" id="bedSubmenu">
                        <li>
                            <a href="#">Add Bed</a>
                        </li>
                        <li>
                            <a href="#">Bed List</a>
                        </li>
                        <li>
                            <a href="#">Bed Assign</a>
                        </li>
                        <li>
                            <a href="#">Bed Assign List</a>
                        </li>
                        <li>
                            <a href="#">Bed Transfer List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#billSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Billing
                    </a>
                    <ul class="collapse list-unstyled" id="billSubmenu">
                        <li>
                            <a href="#">Add Service</a>
                        </li>
                        <li>
                            <a href="#">Service List</a>
                        </li>
                        <li>
                            <a href="#">Add Package</a>
                        </li>
                        <li>
                            <a href="#">Package List</a>
                        </li>
                        <li>
                            <a href="#">Add Patient Admission</a>
                        </li>
                        <li>
                            <a href="#">Patient Admission List</a>
                        </li>
                        <li>
                            <a href="#">Add Advance Payment</a>
                        </li>
                        <li>
                            <a href="#">Advance Payment List</a>
                        </li>
                        <li>
                            <a href="#">Add Bill</a>
                        </li>
                        <li>
                            <a href="#">Bill List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#AMSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Account Manager
                    </a>
                    <ul class="collapse list-unstyled" id="AMSubmenu">
                        <li>
                            <a href="#">Chart of Account</a>
                        </li>
                        <li>
                            <a href="#">Debit Voucher</a>
                        </li>
                        <li>
                            <a href="#">Credit Voucher</a>
                        </li>
                        <li>
                            <a href="#">Contra Voucher</a>
                        </li>
                        <li>
                            <a href="#">Journal Voucher</a>
                        </li>
                        <li>
                            <a href="#">Voucher Approval</a>
                        </li>
                        <li>
                            <a href="#">Account Report</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#MessageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Message
                    </a>
                    <ul class="collapse list-unstyled" id="MessageSubmenu">
                        <li>
                            <a href="#">New Message</a>
                        </li>
                        <li>
                            <a href="#">Inbox</a>
                        </li>
                        <li>
                            <a href="#">Sent</a>
                        </li>
                    </ul>
                </li>
                <li>

                    <a href="#">
                        <i class="fas fa-briefcase"></i>
                        About
                    </a>

                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>

                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>

            <!-- <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">Website View</a>
                </li>
                <li>
                    <a href="#" class="article">Complains Box</a>
                </li>
            </ul> -->
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button href=" " type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Show/Hide Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <!-- welcome message -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="info-box bg-olive">
                        <span class="info-box-icon"><i class="fa fa-edit"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Appointment</span>
                            <span class="info-box-number">0</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                                14 October, 2021 </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" "="">
                    <div class=" info-box bg-blue">
                    <span class="info-box-icon"><i class="fa fa-wheelchair"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Patient</span>
                        <span class="info-box-number">1</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            14 October, 2021 </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="ti-book"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Prescription</span>
                        <span class="info-box-number">1</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            14 October, 2021 </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-user-md"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Doctor</span>
                        <span class="info-box-number">0</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            14 October, 2021 </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="info-box bg-ferozi">
                    <span class="info-box-icon"><i class="fa fa-bed"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Free bed list</span>
                        <span class="info-box-number">6</span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            14 October, 2021 </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="info-box bg-light-green">
                    <span class="info-box-icon"><i class="fa fa-sign-out"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Discharged</span>
                        <span class="info-box-number">0</span>


                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <span class="progress-description">
                            14 October, 2021 </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>
        <div class="container">
            <h2>Coming Soon!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h2>Doctors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h2>Nurses</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h3>Investers</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>
</body>

</html>