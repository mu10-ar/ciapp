<h1 style="text-align: center; margin:  4px; color:brown">Bed List!</h1>

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
                <th scope="col">Department Name</th>
                <th scope="col">Bed Number</th>
                <th scope="col">Description</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
             $id = 1;
        foreach ($beds as $beds): ?>
            <tr>
                <th scope="row"><?=$id?></th>
                <td><?=$beds['department_name']?></td>
                <td><?=$beds['bed_id']?></td>
                <td><?=$beds['description']?></td>
              
                
            </tr>
            <?php $id++; endforeach?>

        </tbody>
    </table>
</div>