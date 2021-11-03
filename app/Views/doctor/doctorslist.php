<!-- Doctors List -->
<h1 style="text-align: center; margin:  4px;"> Doctors List</h1>


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
        <div class="row">

       
<div class="col-md-3">
        <ul class="list-group list-group-flush">
  <li class="h4 list-group-item">Specializations</li>
  <li class="list-group-item"><a href="<?=base_url()?>/doctorscategory/arthopedic">arthopedic</a></li>
  <li class="list-group-item"><a href="<?=base_url()?>/doctorscategory/Cardiologist">Cardiologist</a></li>
  <li class="list-group-item"><a href="<?=base_url()?>/doctorscategory/ent">ENT Specialist</a></li>
  <li class="list-group-item"><a href="<?=base_url()?>/doctorscategory/Medical">Medical Specialistt</a></li>
  
</ul>
</div>

<div class="col-md-9">
<table id="myTable" class="table table- table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">firstname</th>
            <th scope="col">lastname</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
     
            <th scope="col">action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        $session = session();
        $userrole = $session->get('user_role');

        $id = 1;
        foreach ($users as $user) { ?>
            <tr>

                <th scope="row"><?= $id ?></th>
                <td><?= $user['firstname'] ?></td>
                <td><?= $user['lastname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['address'] ?></td>


                <td>
                    <?php     
                     
                     if ($session->get('user_role')==1):
              ?>
                    ?> <a href="<?= base_url() ?>/update/<?= $user['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?= base_url() ?>/delete/<?= $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    <?php
                    endif; ?>
                    <a href="<?= base_url() ?>/profile/<?= $user['id'] ?>" class="btn btn-warning btn-sm">profile</a>
                </td>
            </tr>
        <?php
            $id++;
        } ?>
   </tbody>
</table>
</div>

</div>