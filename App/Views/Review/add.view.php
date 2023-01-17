<?php /* @var Array $data 8*/ ?>

<script src="public/js/validation.js"></script>

<div class="container">
    <form action="?c=review&a=add" method="post" name="addReview" onsubmit="return validationOfReview()">
        <div class="form-group">
            <label for="name">Vaše meno</label>
            <p id="name-input" hidden></p>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="text-center text-danger mb-3">
            <?= @$data['nameError'] ?>
        </div>
        <div class="form-group">
            <label for="text">Recenzia</label>
            <p id="text-input" hidden></p>
            <textarea name="text" class="form-control" id="text" rows="3"></textarea>
        </div>
        <div class="text-center text-danger mb-3">
            <?= @$data['textError'] ?>
        </div>
        <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Odoslať</button>
    </form>
</div>
