<!-- Salaries View -->
<div class="container-fluid">
    <h1 style="text-align: center; margin:4px;">Salaries</h1>
</div>
<div class="container">


<div class="container mt-4">
        <div class="row">
             <div class="col-md-12 text-right ">
                 
                 <a href="#" class="btn btn-primary">ADD</a>
             </div>
        </div>
  </div>
  
    <div class="container mt-4">
        <div class="row">

        <div class="col-md-12">
       <?php
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
                    <div class="card-header bg-purple text-white">
                        <div class="card-header-title">Books</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                        <thead>   
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Salary</th>
                                <th>Salary Month</th>
                                <th>Salary</th>
                                <th>Date</th>
                                <th width="150">Action</th>
                            </tr>
                            </thead>
                            
                            
                            <tbody>
                            
                                <tr>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                                

                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>