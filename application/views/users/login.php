<?php echo form_open('users/login'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 clas="text-center"><?php echo $title; ?></h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </div>
</form>