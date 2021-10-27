<div class="container">
    <div class="container">

        <h1 style="text-align: center; margin:  4px;">Bills Here!</h1>

    </div>
    <script>
        function printDiv() {
            var divContents = document.getElementById("bill").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body > <h1>Div contents are <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
    <div id="bill">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient id</th>
                    <th scope="col">services</th>
                    <th scope="col">price</th>
                    <th scope="col">paid</th>
                    <th scope="col">date</th>
                </tr>


            </thead>
            <tbody>
                <?php $id=1;
                        $total=0;
                        $totalprice=0;
                        $totalpaid=0;
                        foreach ($bill as $bill):
                ?>
                <tr>
                    <th scope="row"><?=$id?></th>
                    <td><?=$bill['patient_id']?></td>
                    <td><?=$bill['services']?></td>
                    <td><?=$bill['price']?></td>
                    <td><?=$bill['paid']?></td>
                    <td><?=$bill['date']?></td>
                </tr>
                <?php 
                $totalprice= $totalprice+$bill['price'];
                $totalpaid= $totalpaid+$bill['paid'];
                
                
                $id++;
                        endforeach;
                        $total=$totalprice-$totalpaid
                        
                        ?>



            </tbody>
        </table>
       

        </div>
        <h3 >grand total: <?=$total?></h3>
        <a onclick="printDiv()" class="btn btn-primary" href="#">printbill</a>
    </div>
</div>