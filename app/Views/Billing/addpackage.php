<div class="container">
            <h1 style="text-align: center;">Add Package!</h1>

            <form action="" method="">
                <div class="mb-3">
                    <label for="packagename" class="form-label">Package Name</label>
                    <input type="text" class="form-control" id="packagename" name="packagename" placeholder="Package Name">
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                  </div>
                  <label for="package including" >Package Including</label>
                  <div class="col-sm-9">
                    <table id="services" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Add / Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="service_name[]" class="form-control service_name service_data" type="text" placeholder="Service Name">
                                    <input type="hidden" name="service_id[]" class="service_id">
                                </td>
                                <td>
                                    <input name="quantity[]" class="form-control quantity" type="text" placeholder="Quantity">
                                </td>
                                <td>
                                    <input name="amount[]" class="form-control amount" type="text" placeholder="Amount">
                                </td>
                                <td>
                                    <div class="btn btn-group">
                                        <button type="button" class="addMore btn btn-sm btn-success">+</button>
                                        <button type="button" class="remove btn btn-sm btn-danger">-</button>
                                    </div>
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </div>
                  <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="number" class="form-control" id="discount" name="discount" placeholder="Discount Here!">
                  </div>
                  <div class="">
                    <label for="status" class="form-label">Status: </label>
                   
                   Active <input  type="radio" class="" id="radio-inline"> 
                   Inavtive <input  type="radio" class="" id="radio-inline"> 
                </div>
                <button type="button" class="btn btn-primary">Add</button>
            </form>
</div>
      