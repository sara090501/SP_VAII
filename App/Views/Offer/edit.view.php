<?php /* @var \App\Models\Offer $data */ ?>

<form action="?c=offer&a=edit" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Meno</label>
        <input value="<?=$data->getName()?>" name="title" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Popis</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getDescription()?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Cesta k fotke</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getImgpath()?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Cena produktu</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getPrice()?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>