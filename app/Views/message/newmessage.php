<div class="container">
    <h1 style="text-align: center;">Type Your Message!</h1>

    <form action="" method="post">
        
        <div class="form-group mb-3">
            <label for="reciever" class="form-labe">Send To<i class="text-danger">*</i></label>
            <select id="reciever" class="form-control" name="reciever_id">

            <?php
            $session=session();
          
            foreach($user as $user){?>
           
                <option value="<?=$user['id']?>"> <?=$user['firstname'].' '.$user['lastname']?></option>

                <?php ;}?>
               
            </select>
            <span class="red">
                            <?php 
                                if (isset($validation)&& $validation->hasError('reciever_id')) {

                                    echo $validation->getError('reciever_id');
                                }?>
                        </span>
        </div>
        <div class="form-group mb-3">
            <label for="subject" class="form-label"> Subject<i class="text-danger">*</i></label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
            <span class="red">
                            <?php 
                                if (isset($validation)&& $validation->hasError('subject')) {

                                    echo $validation->getError('subject');
                                }?>
                        </span>
        </div>

        <div class="form-group mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            <span class="red">
                            <?php 
                                if (isset($validation)&& $validation->hasError('message')) {

                                    echo $validation->getError('message');
                                }?>
                        </span>
        </div>
        <input type="hidden" name="sender_id" value="<?=$session->get('user_id')?>">
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>