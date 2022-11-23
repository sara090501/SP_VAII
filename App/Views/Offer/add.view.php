<?php /* @var App\Models\Offer $data 8*/ ?>

<form action="?c=offer&a=add" method="post">
    <div class="form-group">
        <label for="exampleFormControlInput1">Názov</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Popis</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Cesta k fotke</label>
        <textarea name="imgpath" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Cena produktu</label>
        <textarea name="price" class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Pridať</button>
</form>
