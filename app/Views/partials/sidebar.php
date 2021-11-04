<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <title>Arkahm Asylym</title>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/dropdown.min.css"> -->
    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <!-- <script src="/cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
    <!-- <link rel="stylesheet" href="cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
    .red {
        color: red;
    }

    .c {
        text-shadow: 4px 4px 10px black;
    }
    </style>

</head>

<body>
    <?php
    $session = session();
    $userrole = $session->get('user_role');
    ?>





    <div style="word-wrap: break-word;" class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header c">
                <h3>Arkham Asylum</h3>
                <strong>AS</strong>
            </div>




            <ul class="list-unstyled components">
                <?php if($session->get('user_role')!=4):?>

                <li>
                    <a href="<?= base_url() ?>">
                        <i class="fas fa-image"></i>

                        Dashboard
                    </a>
                </li>
                <?php endif?>


                <li>
                    <a href="<?= base_url() ?>/profile/<?=$session->get('user_id')?>">
                        <i class="fas fa-image"></i>
My Profile
                    </a>
                </li>


                <li>
                    <a href="<?= base_url() ?>/notifications">
                        <i class="fas fa-info"></i>

                        Notifications
                    </a>

                </li>



                <li>
                    <?php
                    if (($userrole == 1) || ($userrole == 2) || ($userrole == 3) || ($userrole == 4)) :

                    ?>
                    <a style="word-wrap: break-word;" href="#departmentSubmenu" data-toggle="collapse"
                        aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Department
                    </a>
                    <ul class="collapse list-unstyled" id="departmentSubmenu">
                        <?php
                            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                            ?>
                             <?php
                        if ($userrole == 1) :

                        ?>
                        <li>
                            <a href="<?= base_url() ?>/createdepartment">Add Department</a>
                        </li>
                        <?php
                        endif
                        ?>
                        <?php ;
                            endif ?>
                        <li>
                            <a href="<?= base_url() ?>/department">Department List</a>
                        </li>
                    </ul>
                </li>
                <?php ;
                    endif ?>

                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3) || ($userrole == 4)) :

            ?>

                <li>
                    <a href="#doctorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Doctors
                    </a>
                    <ul class="collapse list-unstyled" id="doctorSubmenu">

                        <?php
                        if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                        ?>
                         <?php
                        if ($userrole == 1) :

                        ?>
                        <li>
                            <a href="<?php echo base_url(); ?>/createuser">Add Doctor</a>
                        </li>
                        <?php
                       endif

                        ?>
                        <?php ;
                        endif ?>
                        <li>
                            <a href="<?php echo base_url() ?>/doctorslist">Doctors List</a>
                        </li>
                        <!-- <li>
                            <a href="#">Page 3</a>
                        </li> -->
                    </ul>
                </li>
                <?php ;
            endif ?>



                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3) || ($userrole == 4)) :

            ?>


                <li>
                    <a href="#nurseSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Nurse
                    </a>
                    <ul class="collapse list-unstyled" id="nurseSubmenu">

                        <?php
                        if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                        ?>

                        <?php
                        if ($userrole == 1) :

                        ?>


                        <li>
                            <a href="<?= base_url() ?>/addnurse">Add Nurse</a>
                        </li>
                        <?php ;
                        endif ?>
                        <li>
                            <a href="<?= base_url() ?>/assignnurse">assign Nurse</a>
                        </li>
                        <?php ;
                        endif ?>
                        <li>
                            <a href="<?= base_url() ?>/nurselist">Nurses List</a>
                        </li>

                    </ul>
                </li>

                <?php ;
            endif ?>

                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)|| ($userrole == 7)) :

            ?>
                <li>
                    <a href="#pharmacySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Pharmacy
                    </a>
                    <ul class="collapse list-unstyled" id="pharmacySubmenu">
                        <li>
                            <a href="<?= base_url() ?>/addmedicine">Add Medicine</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/medicinelist">Medicine List</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/dispatch">Dispatch Medicine</a>
                        </li>

                    </ul>
                </li>


                <?php ;
            endif ?>
                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

            ?>
                <li>
                    <a href="#patientSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Patient
                    </a>
                    <ul class="collapse list-unstyled" id="patientSubmenu">
                        <li>
                            <a href="<?= base_url() ?>/addpatient">Add Patient</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/patientlist">Patient List</a>
                        </li>
                    </ul>
                </li>
                <?php ;
            endif ?>
                 <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 4)) :

            ?>
                <li>
                    <a href="#appointmentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Appointment
                    </a>
                    <?php ;
            endif ?>
                    <ul class="collapse list-unstyled" id="appointmentSubmenu">

                    <?php
                    if ($userrole == 4) :

                    ?>
                        <li>
                            <a href="<?= base_url() ?>/addappointment">Add Appointment</a>
                        </li>
                        <?php  ;
                    endif ?>
                        <?php
                    if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                    ?>
                        <li>
                            <a href="<?= base_url() ?>/appointments"> Appointment List</a>
                        </li>
                        <?php  ;
                    endif ?>
                        <?php
                    if (($userrole == 1) || ($userrole == 2) || ($userrole == 4)) :

                    ?>
                        <li>
                            <a href="<?= base_url() ?>/myschedule/<?=$session->get('user_id')?>"> My Schedule</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/history/<?=$session->get('user_id')?>"> History</a>
                        </li>
                       
                        <?php  ;
                    endif ?>
                    </ul>
                </li>
                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

            ?>
                <li>
                    <a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-solid fa-user"></i>
                        HR
                    </a>
                    <ul class="collapse list-unstyled" id="employeeSubmenu">
                    <?php
                        if ($userrole == 1) :

                        ?>
                        <li>
                            <a href="<?= base_url() ?>/adduser">Add Employee</a>
                        </li>
                        <?php
                        endif

                        ?>
                        <li>
                            <a href="<?= base_url() ?>/employeelist">Employee List</a>
                        </li>
                    </ul>
                </li>
                <?php ;
            endif ?>

                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)|| ($userrole == 7)|| ($userrole == 8)) :

            ?>

                <li>
                    <a href="#prescriptionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Prescription
                    </a>
                    <ul class="collapse list-unstyled" id="prescriptionSubmenu">
                        <li>
                            <a href="<?= base_url() ?>/addcasestudy">Add Patient Case Study</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/casestudylist">Patient Case Study list</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/addprescription">Add Prescription</a>
                        </li>
                        <li>
                            <a href=" <?= base_url() ?>/prescriptionlist">Prescription List</a>
                        </li>
                    </ul>
                </li>
                <?php ;
            endif ?>


              <?php   if ($userrole == 4) :

?>

    <li>
        <a href="#prescriptionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-home"></i>
            Prescription
        </a>
        <ul class="collapse list-unstyled" id="prescriptionSubmenu">
            <li>
                <a href="<?= base_url() ?>/myprescription/<?=$session->get('user_id')?>">My Prescription</a>
            </li>
          
            </li>
        </ul>
    </li>
                    <?php 
                endif ?>

                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)|| ($userrole == 6)) :

            ?>
                <li>
                    <a href="#bedSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Bed Manager
                    </a>
                    <ul class="collapse list-unstyled" id="bedSubmenu">
                        <li>
                            <a href="<?= base_url() ?>/addbed">Add Bed</a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>/bedlist">Bed List</a>
                        </li>
                        <li>
                            <a href="assignbed">Bed Assign</a>
                        </li>
                        <li>
                            <a href="assignedbed">Bed Assign List</a>
                        </li>

                    </ul>
                </li>
                <?php ;
            endif ?>

                <?php
            if (($userrole == 1) || ($userrole == 2)|| ($userrole == 5) ) :

            ?>
                <li>
                    <a href="#billSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Billing
                    </a>
                    <ul class="collapse list-unstyled" id="billSubmenu">
                        <!-- <li>
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
                            <a href="#">Patient Admission List</a> -->
                        <!-- </li> -->
                        <li>
                            <a href="<?=base_url()?>/addbill">Add Bill</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/billlist">Bill List</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/paidbill">paid bill</a>
                        </li>
                    </ul>
                </li>
                <?php ;
            endif ?>

                <?php
            if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

            ?>
                <li>
                    <a href="#AMSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Account Manager
                    </a>
                    <ul class="collapse list-unstyled" id="AMSubmenu">
                        <!-- <li>
                            <a >Pharmacy Accounts</a>
                        </li> -->
                        <li>
                            <a href="<?=base_url()?>/salaries">pay Sallary</a>
                        </li>
                        <li>
                            <a href="<?=base_url()?>/sallarylist">paid sallary</a>
                        </li>
                        <li>
                            <a href="#">Income $ Expenses</a>
                        </li>
                        <li>
                            <a href="addincome">Add Income </a>
                        </li>
                        <li>
                            <a href="incomelist">Income List</a>
                        </li>
                        <li>
                            <a href="addexpense">Add Expenses </a>
                        </li>
                        <li>
                            <a href="expenselist">Expense List</a>
                        </li>
                    </ul>
                </li>
                <?php ;
            endif ?>


<li>
    <li>
        <a href="#MessageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-info"></i>

            Message
        </a>
        <ul class="collapse list-unstyled" id="MessageSubmenu">
            <li>
                <a href="<?=base_url()?>/newmessage">Send Message</a>
            </li>
            <li>
                <a href="<?=base_url()?>/inbox">Inbox</a>
            </li>
            <!-- <li>
                <a href="<?=base_url()?>/sent">Sent</a>
            </li> -->
        </ul>
    </li>
    <li>
        <a href="#events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-info"></i>
events
        </a>
        <ul class="collapse list-unstyled" id="events">
        <?php
                     
                     if ($session->get('user_role')==1):
              ?>
            <li>
                <a href="<?=base_url()?>/addevent">add event</a>
            </li>
            <?php
                     
                    endif
              ?>
            <li>
                <a href="<?=base_url()?>/eventslist">event list</a>
            </li>
           
        </ul>
    </li>
    <a href="<?=base_url()."/accountsetting/".$session->get('user_id')?>" >
                        <i cladd="fas fa-info"></i>

                        Account Settings
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
                        <span id="showhide">Hide/Show </span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url() ?>/logout">logout</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>