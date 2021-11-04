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
                                        <label for="employee_id">Employee name<i class="text-danger">*</i></label>
                                        <select type="number" id="employee_id" name="employee_id" class="form-control">
                                            <?php foreach ($employee as  $employee): ?>
                                       
                                            <option value="<?=$employee['id']?>"><?=$employee['firstname']?> <?=$employee['lastname']?> </option>
                                            <?php endforeach ?>
                                            
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
                                        <select type="text" id="salary_month" name="sallary_month" class="form-control">
                                       
                                            <option value="jan">Jan</option>
                                            <option value="feb">Feb</option>
                                            <option value="mar">Mar</option>
                                            <option value="apr">Apr</option>
                                            <option value="may">MAy</option>
                                            <option value="jun">Jun</option>
                                            <option value="jul">Jul</option>
                                            <option value="aug">Aug</option>
                                            <option value="sep">Sep</option>
                                            <option value="oct">Oct</option>
                                            <option value="nov">NOv</option>
                                            <option value="dec">Dec</option>                                            
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