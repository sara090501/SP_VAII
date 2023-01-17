<?php /* @var \App\Models\Offer $data */ ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src='https://rawgit.com/seiyria/bootstrap-slider/master/dist/bootstrap-slider.js'></script>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/seiyria/bootstrap-slider/master/dist/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="http://seiyria.com/bootstrap-slider/css/bootstrap.min.css">

<form action="?c=offer&a=edit" method="post">
    <?php if ($data->getId()) { ?>
        <input type="hidden" name="id" value="<?=$data->getId() ?>">
    <?php } ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Meno</label>
        <input value="<?=$data->getName()?>" name="name" type="text" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Popis</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getDescription()?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Cesta k fotke</label>
        <textarea name="imgpath" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getImgpath()?></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Cena produktu</label>
        <p><input name="price" type="text" onchange="RGBChange()" class="span2" value="" data-slider-min="0" data-slider-max="12" data-slider-step="0.05" data-slider-value="5" data-slider-id="GC" id="G"/></p>
        <input id="val" value="<?=$data->getPrice()?>" type="text">

        <script>
            var RGBChange = function() {
                $("#val").val(g.getValue());
            };

            var g = $('#G').slider()
                .on('slide', RGBChange)
                .data('slider');
        </script>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Potvrdiť</button>
</form>