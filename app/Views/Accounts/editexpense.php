<!-- Expense Details Form -->
<div class="container-fluid">
            <h1 style="text-align:center">Expense</h1>
        </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div style="background-color: #007bff ;" class="card-header">
                                <div   class="card-header-title text-white">Add Expenses</div>
                            </div>

                            <div class="card-body">

                                <form action="" id="createform" method="post">
                                  
                                    <div class="form-group">
                                        <label for="expense_source">Expense Source<i class="text-danger">*</i></label>
                                        <input value="" type="text" id="expense_source" name="expense_source" class="form-control" placeholder="expense_source">

                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="expense_description">Expense Description<i class="text-danger">*</i></label>
                                        <input  type="text" id="expense_description" name="expense_description" class="form-control" placeholder="expense_description">

                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="expense_amount">Expense Amount <i class="text-danger">*</i></label>
                                        <input type="number"
                                            placeholder="expense_amount"
                                            name="expense_amount" id="expense_amount"
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