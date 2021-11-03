<h1 style="text-align: center; margin:  4px;">Appointment List</h1>
 <div class="container">
 <div class="col-md-12">
     <table class="table">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Serial_no</th>
                 <th scope="col">Patient_id</th>
                 <th scope="col">Department Name</th>

                 <th scope="col">Appointment Date</th>
                
                 <th scope="col">Problems</th>
                 <?php
                 $session= session();
                 if ($session->get('user_role')!=4) :?>
                 
                 <th scope="col">Action</th>
                 <?php endif ?>
             </tr>
         </thead>
         <tbody>
             <?php
           

             
            
            $id=1;
            foreach($appointment as $appointment){?>
             <tr>

                 <th scope="row"><?=$id?></th>
                 <td><?=$appointment['appointment_id']?></td>
                 <td><?=$appointment['patient_id']?></td>
                 <td><?=$appointment['department_name']?></td>
                 <td><?=$appointment['appointment_date']?></td>
                
                 <td><?=$appointment['problem']?></td>
                 <?php
                 if ($session->get('user_role')!=4) :?>
              
                 <td> 
                     <a href="<?=base_url()?>/decline/<?=$appointment['appointment_id']?>"
                         class="btn btn-danger btn-sm">delete</a>
                     <a href="<?=base_url()?>/markaschecked/<?=$appointment['appointment_id']?>"
                         class="btn btn-success btn-sm">mark as checked</a>


                 </td>
                 <?php endif ?>
             </tr>
             <?php $id++;}?>
         </tbody>
        
     </table>
 </div>