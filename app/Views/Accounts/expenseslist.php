<!-- expense List -->
<div class="container-fluid">
    <h1 style="text-align: center; margin:4px;">expense</h1>
</div>
<div class="container">



  
    <div class="container mt-4">
        <div class="row">

        <div class="col-md-12">
       <?php
       $session= session();
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
            <div class="col-md-12 ">
                <div class="card">
                    <div style="background-color: #007bff ;" class="card-header  text-white">
                        <div class="card-header-title">expense</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                        <thead>   
                        <tr>
                                <th>ID</th>
                                <th>expense Source</th>
                                <th>expense Description</th>
                                <th>expense Amount</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            
                            
                            <tbody>
                            
                                <tr>
                                    <?php $id=1;
                                    foreach ($expense as $expense):?>
                                <td><?=$id?></td>
                                <td><?=$expense['expense_source']?></td>
                                <td><?=$expense['expense_description']?></td>
                                <td><?=$expense['expense_amount']?></td>
                                <td>
                                    <a href="<?=base_url()?>/editexpense/<?=$expense['expense_id']?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?=base_url()?>/deleteexpense/<?=$expense['expense_id']?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                <?php
                                endforeach?>
                            </tr>
                                

                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>