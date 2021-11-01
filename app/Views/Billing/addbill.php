<div class="container-fluid">
           <div class="container">
            <div class="container">
            <h1 style="text-align: center;">Bill!!</h1>
            <form action="" method="post">

            <div class="mb-3">
        <?php
            $session=session();?>
                <label for="patientname">Patient Name<i class="text-danger">*</i></label>
                <select id="patientname" name="patient_id" class="form-control">
                    
                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('patient_id')) {

                                    echo $validation->getError('patient_id');
                                }?>
                    </span>
                    <?php
                        
                        foreach ($patient as $patient) {?>



                    <option value="<?=$patient['id']?>"><?=$patient['firstname'].' '.$patient['lastname']?>
                    </option>
                    <?php ;} 
                    ?>


                </select>
        </div>
                    <div class="form-group">
                        <label for="date">Date<i class="text-danger">*</i></label>
                        <input type="date" class="form-control" id="date"
                            placeholder="Date" name="date">
                            <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('date')) {

                                    echo $validation->getError('date');
                                }?>
                    </span>
                    </div>
                </div>
                    <div class="container" id="">
                        <div class="row">


                            <div class="form-group ml-4">
                                <label for="services">Services<i class="text-danger">*</i></label>
                                <input type="text" class="form-control"
                                    name="services" id="services"
                                    placeholder="Services">
                                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('services')) {

                                    echo $validation->getError('services');
                                }?>
                    </span>
                            </div>


                            <div class="form-group ml-1">
                                <label for="description">Description<i class="text-danger">*</i></label>
                                <input type="text" class="form-control"
                                    name="services_description" id="description"
                                    placeholder="Service Description">
                                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('services_description')) {

                                    echo $validation->getError('services_description');
                                }?>
                    </span>
                            </div>

                         
                            <div class="form-group ml-1">
                                <label for="price">Price<i class="text-danger">*</i></label>
                                <input type="number" class="form-control"
                                    name="price" id="price"
                                    placeholder="Price">
                                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('price')) {

                                    echo $validation->getError('price');
                                }?>
                    </span>
                            </div>
                            <div class="form-group ml-1">
                                <label for="price">paid<i class="text-danger">*</i></label>
                                <input type="number" class="form-control"
                                    name="paid" id="price"
                                    placeholder="Price">
                                    <span class="red">
                        <?php 
                                if (isset($validation)&& $validation->hasError('paid')) {

                                    echo $validation->getError('paid');
                                }?>
                    </span>
                            </div>
                        </div>
                        <input type="hidden" name="status" value="0">
                        </div>
                        <button type="submit" name="button" class="btn btn-primary p-2  ">Add Bill</button>
                    </div>
                   
                    </form>