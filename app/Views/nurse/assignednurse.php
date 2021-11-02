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
                <th scope="col">patient id</th>
                <th scope="col">nurse_id</th>
                <th scope="col">notes</th>
                <?php
                $session = session();
                $userrole = $session->get('user_role');
                if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                ?>
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
                <td><?= $user['patient_id'] ?></td>
                <td><?= $user['nurse_id'] ?></td>
                <td><?= $user['notes'] ?></td>
         
                <td>

                    <?php
                        $session = session();
                        $userrole = $session->get('user_role');
                        if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                        ?>
                    <a href="<?= base_url() ?>/unassign/<?= $user['assign_id'] ?>" class="btn btn-danger btn-sm">unAssign</a>
                    <?php endif ?>
                  
                </td>

            </tr>
            <?php $id++;
            } ?>


        </tbody>
    </table>
</div>