<!-- Income List -->
<div class="container-fluid">
    <h1 style="text-align: center; margin:4px;">Income</h1>
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
                        <div class="card-header-title">Income</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                        <thead>   
                        <tr>
                                <th>ID</th>
                                <th>Income Source</th>
                                <th>Income Description</th>
                                <th>Income Amount</th>
                                <th >Action</th>
                            </tr>
                            </thead>
                            
                            
                            <tbody>
                            
                                <tr>
                                    <?php $id=1;
                                    foreach ($income as $income):?>
                                <td><?=$id?></td>
                                <td><?=$income['income_source']?></td>
                                <td><?=$income['income_description']?></td>
                                <td><?=$income['income_amount']?></td>
                                <td>
                                    <a href="<?=base_url()?>/editincome/<?=$income['income_id']?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="<?=base_url()?>/deleteincome/<?=$income['income_id']?>" class="btn btn-danger btn-sm">Delete</a>
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