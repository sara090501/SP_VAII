<?php /* @var App\Models\Post $data 8*/ ?>

<form action="?c=review&a=add" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Text</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
