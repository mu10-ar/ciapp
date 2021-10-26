<h1 style="text-align: center; margin:  4px; color:brown">Notifications</h1>

<div class="container">
    <table class="table">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Notifications</th>
                <th scope="col">dismiss</th>

            </tr>
        </thead>
        <tbody>
            <?php
             $id = 1;
        foreach ($notifications as $notifications): ?>
            <tr>
                <th scope="row"><?=$id?></th>
                <td><?=$notifications['message']?></td>

                <td><a class="btn btn-sm btn-danger"
                        href="deletenotification/<?=$notifications['notification_id']?>">X</a></td>
            </tr>
            <?php $id++; endforeach?>

        </tbody>
    </table>
</div>