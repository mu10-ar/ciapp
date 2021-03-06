<!-- Medicine Information Page -->
  
<div class="col-sm-12" id="PrintMe">
    <div class="panel panel-default thumbnail">


        <div class="panel-body">
            <div class="row">

                <div class="col-sm-12" align="center">
                    <h1>Medicine Information</h1>
                    <br>
                </div>

                <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="Picture" class="img-thumbnail img-responsive"
                        src="https://image.made-in-china.com/202f0j00bCoUIgqRgFcY/90cc-Square-Plastic-HDPE-Medicine-Food-Products-Packaging-Bottle.jpg">
                    <h2>Medicine Name</h2>
                    <h3>
                        <?= $medicine['medicine_name']?>
                    </h3>
                </div>

                <div class="col-md-7 col-lg-7 ">
                    <dl class="dl-horizontal">
                        <dt>Medicine category</dt>
                        <dd><?=$medicine['medicine_category']?></dd>
                        <dt>Price</dt>
                        <dd><?=$medicine['medicine_price']?></dd>
                        <dt>Quantity</dt>
                        <dd><?=$medicine['medicine_stock']?></dd>




                        <dt>Status</dt>
                        <dd>Active</dd>
                    </dl>

                </div>
            </div>
        </div>

        <div class="panel-footer">
            <div class="text-center">
                <strong>Arkham Asylum</strong>
                <p class="text-center">Located in Gotham City, U.S. state of New Jersey </p>
            </div>
        </div>
    </div>
</div>