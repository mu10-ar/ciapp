<div class="container-fluid">
           <div class="container">
            <div class="container">
            <h1 style="text-align: center;">Billl!!</h1>
            <form action="" method="">

                <div class="form-group">
                    <label for="pateint_id">Pateint ID</label>
                    <select type="text" name="patient_id" class="form-control"
                        id="pateint_id">
                        <option selected="">Choose...</option>
                        <option value="">Patient1</option>
                        <option value="">Patient2</option>
                        <option value="">Patient3</option>
                        <option value="">Patient4</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date"
                            placeholder="Date">
                    </div>
                </div>
                    <div class="container" id="">
                        <div class="row">


                            <div class="form-group ml-4">
                                <label for="services">Services</label>
                                <input type="text" class="form-control"
                                    name="serv" id="services"
                                    placeholder="Services">
                            </div>


                            <div class="form-group ml-1">
                                <label for="description">Description</label>
                                <input type="text" class="form-control"
                                    name="descriptoin" id="description"
                                    placeholder="Service Description">
                            </div>

                            <div class="form-group ml-1">
                                <label for="rate">Rate</label>
                                <input type="text" class="form-control"
                                    name="rate" id="rate"
                                    placeholder="Rate">
                            </div>
                            <div class="form-group ml-1">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control"
                                    name="quantity" id="quantity"
                                    placeholder="Quantity">
                            </div>
                            <div class="form-group ml-1">
                                <label for="price">Price</label>
                                <input type="text" class="form-control"
                                    name="price" id="price"
                                    placeholder="Price">
                            </div>
                        </div>
                        </div>
                        <div class="container">
                        <div class="form-group col-md-4 ">
                            <label for="total">Total</label>
                            <input type="number" class="form-control" id="total"
                                placeholder="$0000">
                        </div>
                        <div class="form-group col-md-4     ">
                            <label for="amountpaid">Paid</label>
                            <input type="number" class="form-control" name="paid" id="paid"
                                placeholder="$0000">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="due">Due</label>
                            <input type="number" class="form-control" id="due"
                                placeholder="$0000">
                        </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-primary btn-sm float-right m-1">AddBill</button>
                    </form>
                </div>
            </div>
 
           