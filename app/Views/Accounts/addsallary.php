<!--Add Sallary -->
<div class="container-fluid">
            <h1 style="text-align:center">Sallary</h1>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-header-title">Add Sallary</div>
                            </div>

                            <div class="card-body">

                                <form action="" id="createform" method="post">
                                  
                                    <div class="form-group">
                                        <label for="employee_id">Employee Id<i class="text-danger">*</i></label>
                                        <select type="number" id="employee_id" name="employee_id" class="form-control">
                                       
                                            <option value=""> </option>
                                            
                                            </select>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="amount"> Amount</label>
                                        <input type="number"
                                            placeholder="amount."
                                            name="amount" id="amount"
                                            class="form-control" value="">
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="salary_month">Salary Month<i class="text-danger">*</i></label>
                                        <select type="text" id="salary_month" name="salary_month" class="form-control">
                                       
                                            <optio>Jan</optio>
                                            <optio>Feb</optio>
                                            <optio>Mar</optio>
                                            <optio>Apr</optio>
                                            <optio>MAy</optio>
                                            <optio>JUne</optio>
                                            <optio>July</optio>
                                            <optio>Aug</optio>
                                            <optio>Sep</optio>
                                            <optio>Oct</optio>
                                            <optio>NOv</optio>
                                            <optio>Dec</optio>                                            
                                            </select>
                                    </div>

                                    <button  type="submit" class="btn
                                        btn-primary m-2">Submit</button>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>