<h1 style="text-align: center; margin:  4px;">Add Medicine !</h1>
<div class="container">

    <form method="POST" action="">
        <div class="form-group">
            <label for="medicine_name">Medcinie Name<i class="text-danger">*</i></label>
            <input type="text" value="<?=$medicine['medicine_name']?>" class="form-control" id="medicine_namee="
                name="medicine_name" placeholder="medicine name">
        </div>
        <div class="form-group">
            <label for="category">Category<i class="text-danger">*</i></label>
            <select value="<?=$medicine['medicine_category']?>" class="form-control" name="medicine_category"
                id="category" aria-placeholder="choose...">
                <option>choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <!-- <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3"></textarea>
        </div> -->
        <div class="form-group">
            <label for="quantity">Quantity<i class="text-danger">*</i></label>
            <input value="<?=$medicine['medicine_stock']?>" type="number" class="form-control" id="quantity"
                name="medicine_stock" placeholder="Quantity">
        </div>
        <div class="form-group">
            <label for="price">Price<i class="text-danger">*</i></label>
            <input type="number" value="<?=$medicine['medicine_price']?>" class="form-control" id="price"
                name="medicine_price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="manufactured_by">Manufactured By<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="manufactured_by" value="<?=$medicine['manufactured_by']?>"
                name="manufactured_by" placeholder="company name">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>