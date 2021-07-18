<?php if(isset($errors)) { ?>
    <div class="alert alert-danger p-2 text-start" role="alert">
         <?= $errors[0] ?>
    </div>
<?php } ?>
<?php if(isset($success)) { ?>
    <div class="alert alert-success p-2 text-start" role="alert">
         <?= $success ?>
    </div>
<?php } ?>