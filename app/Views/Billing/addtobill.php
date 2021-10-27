<div class="container-fluid">
           <div class="container">
            <div class="container">
            <h1 style="text-align: center;">Bill!!</h1>
            <form action="" method="post">

            <div class="mb-3">
        <input type="hidden" name="patient_id" value="">
        </div>
                 
                </div>
                 
   <div class="form-group ml-1">
                                <label for="price">Price</label>
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
                                <label for="price">paid</label>
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

                        </div>
                        <button type="submit" name="button" class="btn btn-primary p-2  ">Add Bill</button>
                    </div>
                   
                    </form>
                </div>
            </div>