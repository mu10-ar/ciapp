<!-- employees list -->
<div style="text-align: center; margin:  4px;">
    <h2>Employees List </h2>
</div>
<div class="container">
    <div class="col-md-12">
        <?php
        $session = session();
        if (!empty($session->getFlashdata('success'))) {
        ?>
            <div class="alert alert-success">
                <?php echo $session->getFlashdata('success') ?>
            </div>
        <?php
        }
        if (!empty($session->getFlashdata('error'))) {
        ?>
            <div class="alert alert-danger">
                <?php echo $session->getFlashdata('error') ?>
            </div>

        <?php


        }
        ?>
    </div>

    <?php
    // $session = session();
    // if ($session->getFlashdata('success')) {
    //     echo  $session->getFlashdata('success');
    // }
    ?>
    <table id="myTable" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">email</th>
                <th scope="col">address</th>
                <th scope="col">Role</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $id = 1;
            foreach ($users as $user) { ?>
                <tr>

                    <th scope="row"><?= $id ?></th>
                    <td><?= $user['firstname'] ?></td>
                    <td><?= $user['lastname'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['address'] ?></td>
                    <td><?php

                        if ($user['user_role'] == "5") {
                            echo "acountant";
                        } elseif ($user['user_role'] == "6") {
                            echo  'bed manager';
                        } elseif ($user['user_role'] == "7") {
                            echo "pharmacist";
                        } elseif ($user['user_role'] == "8") {
                            echo "Lab technician";
                        }




                        ?></td>
                    <td> <a href="<?= base_url() ?>/updateemployee/<?= $user['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?= base_url() ?>/deleteemployee/<?= $user['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        <a href="<?= base_url() ?>/profile/<?= $user['id'] ?>" class="btn btn-warning btn-sm">profile</a>
                    </td>
                </tr>
            <?php $id++;
            } ?>


        </tbody>
    </table>