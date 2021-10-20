<!-- employees list -->
<div style="text-align: center; margin:  4px;">
    <h2>Employees List </h2>
</div>   
<div class="container">
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $id=1;
            foreach($users as $user){?>
            <tr>

                <th scope="row"><?=$id?></th>
                <td><?=$user['firstname']?></td>
                <td><?=$user['lastname']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['address']?></td>
                <td> <a href="<?=base_url()?>/update/<?=$user['id']?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?=base_url()?>/delete/<?=$user['id']?>" class="btn btn-danger btn-sm">Delete</a>
                    <a href="<?=base_url()?>/profile/<?=$user['id']?>" class="btn btn-warning btn-sm">profile</a>
                </td>
            </tr>
            <?php $id++;}?>


        </tbody>
    </table>