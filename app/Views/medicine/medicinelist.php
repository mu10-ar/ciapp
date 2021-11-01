<div style="text-align: center; margin:  4px;">
<h1>Medicine List</h1>
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
                 <th scope="col">MEdicine Name</th>
                 <th scope="col">Medicine Category</th>
                 <th scope="col">Price</th>
                 <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
             <?php
                    $id=1;
                    foreach($medicine as $medicine){


                    
                    ?>
             <tr>
                 <th scope="row"><?=$id?></th>
                 <td><?=$medicine['medicine_name'];?></td>
                 <td><?=$medicine['medicine_category'];?></td>
                 <td><?=$medicine['medicine_price'];?></td>
                 <td> <a href="<?=base_url()?>/editmedicine/<?=$medicine['medicine_id']?>"
                         class="btn btn-primary btn-sm">Edit</a>
                     <a href="<?=base_url()?>/deletemedicine/<?=$medicine['medicine_id']?>"
                         class="btn btn-danger btn-sm">Delete</a>
                     <a href="<?=base_url()?>/viewmedicine/<?=$medicine['medicine_id']?>"
                         class="btn btn-warning btn-sm">view</a>
                 </td>
             </tr>
             <?php $id++;}?>

         </tbody>
     </table>
 </div>