<div class="container">
    <h1 style="text-align: center; margin:  4px; color:brown">Inbox!</h1>

            <table class="table">
                <thead>
                    <tr>

                   
                    
                        <th scope="col">#</th>
                        <th scope="col">From</th>
                        <th scope="col">subject</th>
                        <th scope="col">Message</th>     
                        <th scope="col">Sent At</th>     
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $id=1;
                foreach ($inbox as $inbox):?>
                    <tr>
                        <th scope="row"><?=$id?></th>
                        <td><?=$inbox['firstname']?></td>
                        <td><?=$inbox['subject']?></td>
                        <td><?=$inbox['message']?></td>
                        <td><?=$inbox['sent_at']?></td>
                       
                        <td><a href="<?= base_url()?>/deletemessage/<?=$inbox['message_id']?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php $id++; endforeach ?>
                   
                </tbody>
            </table>
</div>
