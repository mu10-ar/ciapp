<div class="container">
    <div class="container">

        <h1 style="text-align: center; margin:  4px;">Bills Here!</h1>

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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient name</th> 
                    <th scope="col">Action</th>
                </tr>


            </thead>
            <tbody>

            <?php $id=1;
            foreach ($patient as $patient):?>
                <tr>
                    <th scope="row"><?=$id?></th>
                    <td><?=$patient['firstname'].' '.$patient['lastname']?></td>
                  
                    <td>
                    <a href="<?=base_url()?>/viewbill/<?=$patient['id']?>" class="btn btn-primary"> view Bill</a>
                    <a href="<?=base_url()?>/markaspaid/<?=$patient['id']?>" class="btn btn-primary"> mark as paid</a>




                    </td>
                </tr>
                <?php $id++; endforeach ?>
            

            </tbody>
        </table>
    </div>
</div>
