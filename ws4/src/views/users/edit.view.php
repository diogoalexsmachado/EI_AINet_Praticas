<form action="user-edit.php" method="post" class="form-group">
    <input type="hidden" name="user_id" value="" />
    <?php require 'src/views/users/partials/add-edit.view.php'?>
    <div class="form-group">
        <button type="submit" class="btn btn-success" name="ok">Save</button>
        <button type="submit" class="btn btn-default" name="cancel">Cancel</button>
    </div>
</form>
