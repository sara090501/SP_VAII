<?php /* @var App\Models\Post $data 8*/ ?>

<script src="public/js/validation.js"></script>

<div class="container">
    <form action="?c=review&a=add" method="post" name="addReview" onsubmit="return validationOfReview()">
        <div class="form-group">
            <label for="exampleFormControlInput1">Vaše meno</label>
            <p id="name-input" hidden></p>
            <input name="name" type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Recenzia</label>
            <p id="text-input" hidden></p>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Odoslať</button>
    </form>
</div>
