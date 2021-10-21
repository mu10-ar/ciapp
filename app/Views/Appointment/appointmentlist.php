 <h1 style="text-align: center; margin:  4px;">Appointment List</h1>
 <div class="container">
     <table class="table">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Patient_id</th>
                 <th scope="col">Department Name</th>
                 <th scope="col">Doctor Name</th>
                 <th scope="col">Appointment Date</th>
                 <th scope="col">Serial_no</th>
                 <th scope="col">Problems</th>
                 <th scope="col">Action</th>
             </tr>
         </thead>
         <tbody>
             <?php
            
            $id=1;
            foreach($appointment as $appointment){?>
             <tr>

                 <th scope="row"><?=$id?></th>
                 <td><?=$appointment['id']?></td>
                 <td><?=$appointment['department_name']?></td>
                 <td><?=$appointment['doctor_name']?></td>
                 <td><?=$appointment['appointment_date']?></td>
                 <td><?=$appointment['appointment_id']?></td>
                 <td><?=$appointment['problem']?></td>
                 <td> <a href="<?=base_url()?>/editappointment/<?=$appointment['appointment_id']?>"
                         class="btn btn-primary btn-sm">Edit</a>
                     <a href="<?=base_url()?>/deleteappointment/<?=$appointment['appointment_id']?>"
                         class="btn btn-danger btn-sm">Delete</a>

                 </td>
             </tr>
             <?php $id++;}?>
         </tbody>
     </table>
 </div>