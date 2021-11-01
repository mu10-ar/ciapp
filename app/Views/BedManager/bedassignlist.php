<h1 style="text-align: center; margin:  4px; color:brown">Bed Assign List!</h1>

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
                        <th scope="col">Patient Id</th>
                      
                        <th scope="col">Bed Number</th>
                        <th scope="col">Assign Date</th>
                        
                        <th scope="col">Description</th>
                  
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php $id=1;
                foreach ($bed as $bed): 
              
                
                ?>
                    <tr>
                        <th scope="row"><?=$id?></th>
                        <td><?=$bed['patient_id']?></td>
                      
                        <td><?=$bed['assigned_bed']?></td>
                        <td><?=$bed['assigned_at']?></td>
                        
                        <td><?=$bed['description']?></td>
                       
                        <td>
                    <a class="btn btn-danger btn-sm" href="discharge/<?=$bed['assigned_bed']?>">discharge</a>

                        </td>
                    </tr>
                    <?php
                    $id++;
                    endforeach
                    
                    ?>
                   
                </tbody>
            </table>
</div>