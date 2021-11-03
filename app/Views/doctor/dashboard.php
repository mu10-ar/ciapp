<div class="container">
<div class="row">
    <!-- welcome message -->
 

  
    <div class="col-md-12">
       <?php
       $session=session();
       if(!empty($session->getFlashdata('success'))){
           ?>
           <div class="alert alert-success">
               <?php echo $session->getFlashdata('success') ?>
           </div>
           <?php
       }
       if(!empty($session->getFlashdata('error'))){
           ?>
           <div class="alert alert-danger">
               <?php echo $session->getFlashdata('error') ?>
           </div>
           
           <?php
           

       }   
       ?>  
        </div>   

<?php 
$session= session();
if($session->get('user_role')!=4):?>
    <div class="col;-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="info-box bg-olive">
            <span class="info-box-icon"><i class="fa fa-edit"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Appointment</span>
                <span class="info-box-number"><?=$appointment?></span>

                <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                </div>
                <span class="progress-description">
                <?=date("Y.m.d") ?> </span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
   

    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" "="">
                    <div class=" info-box bg-blue">
        <span class="info-box-icon"><i class="fa fa-wheelchair"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Patient</span>
            <span class="info-box-number"><?=$patient?></span>

            <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
            <?=date("Y.m.d") ?> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="info-box bg-yellow">
        <span class="info-box-icon"><i class="fas fa-capsules"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Prescription</span>
            <span class="info-box-number">1</span>

            <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
            <?=date("Y.m.d") ?> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="info-box bg-green">
        <span class="info-box-icon"><i class="fa fa-user-md"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Doctor</span>
            <span class="info-box-number"><?=$doctor?></span>

            <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
            <?=date("Y.m.d") ?> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="info-box bg-ferozi">
        <span class="info-box-icon"><i class="fa fa-bed"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Free bed list</span>
            <span class="info-box-number"><?=$bed?></span>

            <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
            <?=date("Y.m.d") ?> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>

<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="info-box bg-light-green">
        <span class="info-box-icon"><i class="fab fa-accessible-icon"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Nurse</span>
            <span class="info-box-number"><?=$nurse?></span>


            <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
            <span class="progress-description">
               <?=date("Y.m.d") ?> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
</div>
</div>
</div>
<?php endif?>
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