<div class="container">
    <div class="container">

        <h1 style="text-align: center; margin:  4px;">Bills Here!</h1>

    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Patient name</th> 
                    <th scope="col">Action</th>
                </tr>


            </thead>
            <tbody>

            <?php $id=1;
            foreach ($patient as $patient):?>
                <tr>
                    <th scope="row"><?=$id?></th>
                    <td><?=$patient['firstname'].' '.$patient['lastname']?></td>
                  
                    <td>
                    <a href="<?=base_url()?>/viewpaidbill/<?=$patient['id']?>" class="btn btn-primary"> view Bill</a>
                    </td>
                </tr>
                <?php $id++; endforeach ?>
            

            </tbody>
        </table>
    </div>
</div>