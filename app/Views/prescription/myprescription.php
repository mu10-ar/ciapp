<div class="container" style="background-color: rgb(248, 248, 248);">
    <div style="text-align: center; margin:  4px;">
    <h1>PrescriptionS Here!</h1>
    </div>
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
                            <th scope="col">Blood Pressure</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Date</th>
                            <th scope="col">Medicine Name</th>
                            <th scope="col">Medicine Days</th>
                            <th scope="col">Diagnosis</th>
                            <th scope="col">Diagnosis Instructions</th>
                            <th scope="col">Visiting Fees</th>
                            <th scope="col"> Patient Notes</th>
                            
                        </tr>
                           
                            
                    </thead>
                    <tbody>

                    <?php $id=1;
                     foreach($prescription as $prescription):
                    
                    
                    ?>
                        <tr>
                            <th scope="row"><?=$id?></th>
                            <td><?=$prescription['patient_id']?></td>
                            <td><?=$prescription['blood_pressure']?></td>
                            <td><?=$prescription['weight']?></td>  
                            
                            <td><?=$prescription['date']?></td>
                            <td><?=$prescription['medicine']?></td>
                            <td><?=$prescription['medicine_days']?></td>
                            <td><?=$prescription['diagnosis']?></td>
                            <td><?=$prescription['diagnosis_instruction']?></td>
                            <td><?=$prescription['visiting_fee']?></td>
                            <td><?=$prescription['patient_notes']?></td>
                           
                        </tr>
                        <?php $id++;
                             endforeach;
                    
                    
                    ?>
                       
                    </tbody>
                </table>
    </div>