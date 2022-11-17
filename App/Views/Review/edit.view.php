<?php /* @var \App\Models\Review $data */
/** @var \App\Core\IAuthenticator $auth */
?>

<form action="?c=posts&a=edit" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input value="<?=$data->getTitle()?>" name="title" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Text</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getText()?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>