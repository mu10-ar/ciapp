<div class="container">
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">department name</th>
                <th scope="col">department Description</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <?php


if (empty($department)) {
    echo " no record found";
} else {
      $id=1;
            foreach($department as $department)
            {
                ?>
                <th scope="row">1</th>
                <td><?=$department['department_name']?></td>
                <td><?=$department['department_description']?></td>

                <td> <a href="<?=base_url()?>/editdepartment/<?=$department['department_id']?>"
                        class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?=base_url()?>/deletedepartment/<?=$department['department_id']?>"
                        class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            <?php $id++;
        }
            }?>








        </tbody>
    </table>
</div>