<div style="text-align: center; margin:  4px;">
    <h2>Nurse List </h2>
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
    <table id="mytable" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">email</th>
                <?php
                $session = session();
                $userrole = $session->get('user_role');
                if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                ?>
                <th scope="col">address</th>
               
                     
              
                <th scope="col">action</th>

                
                <?php endif ?>
            </tr>
        </thead>
        <tbody>
            <?php

            $id = 1;
            foreach ($users as $user) { ?>
            <tr>

                <th scope="row"><?= $id ?></th>
                <td><?= $user['firstname'] ?></td>
                <td><?= $user['lastname'] ?></td>
                <td><?= $user['email'] ?></td>
                <?php      if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :?> 
                   

                <td><?= $user['address'] ?></td>
                <?php endif ?>
                <td>

                    <?php
                        $session = session();
                        $userrole = $session->get('user_role');
                        if (($userrole == 1) ) :

                        ?><a href="<?= base_url() ?>/updatenurse/<?= $user['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?= base_url() ?>/deletenurse/<?= $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    <?php endif ?>
                    <a href="<?= base_url() ?>/profile/<?= $user['id'] ?>" class="btn btn-warning btn-sm">profile</a>
                </td>

            </tr>
            <?php $id++;
            } ?>


        </tbody>
    </table>
</div>