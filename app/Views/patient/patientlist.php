<div style="text-align: center; margin:  4px;">
    <h2>Patients List </h2>
</div>
<div class="container">
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
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">patient id</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            <?php
            
            $id=1;
            foreach($users as $user){?>
            <tr>

                <th scope="row"><?=$id?></th>
                <td><?=$user['firstname'].' '.$user['lastname']?></td>
                <td><?=$user['id']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['address']?></td>
              
                <td>  <?php
                if ($session->get('user_role')==1):
            
                ?> <a href="<?=base_url()?>/updatepatient/<?=$user['id']?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?=base_url()?>/deletepatient/<?=$user['id']?>" class="btn btn-danger btn-sm">Delete</a>
                    <?php
               endif
            
                ?>
                    <a href="<?=base_url()?>/profile/<?=$user['id']?>" class="btn btn-warning btn-sm">profile</a>
                </td>
            </tr>
            <?php $id++;}?>



        </tbody>
    </table>