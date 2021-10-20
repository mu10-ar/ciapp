 <div class="container">
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