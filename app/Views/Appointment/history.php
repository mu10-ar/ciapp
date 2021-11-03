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
                 $session= session();?>
                
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
                
             </tr>
             <?php $id++;}?>
         </tbody>
        
     </table>
 </div>