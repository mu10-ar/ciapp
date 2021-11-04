<!-- Income Details Form -->


<div class="container-fluid">
            <h1 style="text-align:center">Income</h1>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div style="background-color: #007bff ;"  class="card-header">
                                <div  class="card-header-title text-white">Add Income</div>
                            </div>

                            <div class="card-body">

                                <form action="" id="createform" method="post">
                                  
                                    <div class="form-group">
                                        <label for="income_source">Income Source<i class="text-danger">*</i></label>
                                        <input type="text" id="income_source" value=" <?=$singleincome['income_source']?>" name="income_source" class="form-control" placeholder="income_source">

                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="income_description">Income Description<i class="text-danger">*</i></label>
                                        <input  type="text" value=" <?=$singleincome['income_description']?>"  id="income_description" name="income_description" class="form-control" placeholder="income_description">

                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="income_amount">Income Amount <i class="text-danger">*</i></label>
                                        <input type="number"
                                        value="<?=$singleincome['income_amount']?>" 
                                            placeholder="income_amount"
                                            name="income_amount" id="income_amount"
                                            class="form-control" >
                                    </div>

                                    <button  type="submit" class="btn
                                        btn-primary m-2">Submit</button>
                                </form>
                               

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        