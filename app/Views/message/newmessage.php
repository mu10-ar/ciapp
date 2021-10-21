<div class="container">
    <h1 style="text-align: center;">Type Your Message!</h1>

    <form action="" method="">
        
        <div class="form-group mb-3">
            <label for="reciever" class="form-labe">Send To</label>
            <select id="reciever" class="form-control" name="reciever">
                <option selected>Reciever...</option>
                <option>Nurse 2</option>
                <option>Doctor 1</option>
                <option>...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="subject" class="form-label"> Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
        </div>

        <div class="form-group mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="Message" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-primary">Add</button>
    </form>
</div>