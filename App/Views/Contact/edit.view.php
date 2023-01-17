<?php /* @var \App\Models\Contact $data */ ?>

<script src="public/js/validation.js"></script>

<form action="?c=contact&a=edit" method="post" name="contactEdit" onsubmit="return validationOfReviewEdit()">
    <?php if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?=$data->getId() ?>">
    <?php } ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Meno</label>
        <p id="name-input" hidden></p>
        <input value="<?=$data->getName()?>" name="name" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="form-group">
        <label for="email">E-mailová adresa</label>
        <p id="email-input" hidden></p>
        <input  value="<?=$data->getEmail()?>" name="email" type="email" class="form-control" id="email" placeholder="Vložte email" required="">
    </div>
    <div class="form-group">
        <label for="message">Správa</label>
        <p id="message-input" hidden></p>
        <textarea name="message" type="message" class="form-control" id="message" rows="6"><?=$data->getMessage()?></textarea>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Potvrdiť</button>
</form>