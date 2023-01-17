<?php /* @var \App\Models\Contact $data */ ?>

<form action="?c=contact&a=edit" method="post">
    <?php if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?=$data->getId() ?>">
    <?php } ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Meno</label>
        <input value="<?=$data->getName()?>" name="name" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="form-group">
        <label for="email">E-mailová adresa</label>
        <input  value="<?=$data->getEmail()?>" name="email" type="email" class="form-control" id="email" placeholder="Vložte email" required="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Správa</label>
        <textarea name="message" type="message" class="form-control" id="exampleFormControlTextarea1" rows="6"><?=$data->getMessage()?></textarea>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Potvrdiť</button>
</form>