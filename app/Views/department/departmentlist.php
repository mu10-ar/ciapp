<h1 style="text-align: center; margin-bottom:  6px;"> Department List</h1>
<div class="container">
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">department name</th>
                <th scope="col">department Description</th>
                <?php
                $session = session();
                $userrole = $session->get('user_role');
                if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                ?>
                <th scope="col">action</th>
                <?php endif ?>
            </tr>
        </thead>
        <tbody>

            <tr>
                <?php


                if (empty($department)) {
                    echo " no record found";
                } else {
                    $id = 1;
                    foreach ($department as $department) {
                ?>
                <th scope="row"><?= $id ?></th>
                <td><?= $department['department_name'] ?></td>
                <td><?= $department['department_description'] ?></td>
                <?php
                        $session = session();
                        $userrole = $session->get('user_role');
                        if (($userrole == 1) || ($userrole == 2) || ($userrole == 3)) :

                        ?>
                <td> <a href="<?= base_url() ?>/editdepartment/<?= $department['department_id'] ?>"
                        class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?= base_url() ?>/deletedepartment/<?= $department['department_id'] ?>"
                        class="btn btn-danger btn-sm">Delete</a>
                </td>
                <?php endif ?>
            </tr>

            <?php $id++;
                    }
                } ?>








        </tbody>
    </table>
</div>