<?php require 'src/views/users/partials/errors.view.php'?>
<form action="user-add.php" method="post" class="form-group">
    <?php require 'src/views/users/partials/add-edit.view.php'?>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input
            type="password" class="form-control"
            name="password" id="inputPassword"
            value=""/>
    </div>
    <div class="form-group">
        <label for="inputPasswordConfirmation">Password confirmation</label>
        <input
            type="password" class="form-control"
            name="password_confirmation" id="inputPasswordConfirmation"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success" name="ok">Add</button>
        <button type="submit" class="btn btn-default" name="cancel">Cancel</button>
    </div>
</form>
