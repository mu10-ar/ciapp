<div style="text-align: center; margin:  4px;">
<h1>event List</h1>
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
                 <th scope="col">event  Name</th>
                 <th scope="col">event description</th>
                 <?php
                     
                     if ($session->get('user_role')==1):
              ?>
                 <th scope="col">Action</th>
                 <?php
                     
                    endif
              ?>
             </tr>
         </thead>
         <tbody>
             <?php
                    $id=1;
                    foreach($event as $event){


                    
                    ?>
             <tr>
                 <th scope="row"><?=$id?></th>
                 <td><?=$event['event_name'];?></td>
                 <td><?=$event['event_description'];?></td>
       
                 <td>
                     <a href="<?=base_url()?>/deleteevent/<?=$event['event_id']?>"

                     <?php
                     
                     if ($session->get('user_role')==1):
              ?>
                         class="btn btn-danger btn-sm">Delete</a>
                         <?php
                     
                    endif
              ?>
                 </td>
             </tr>
             <?php $id++;}?>

         </tbody>
     </table>
 </div>