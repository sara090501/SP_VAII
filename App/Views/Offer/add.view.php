<?php /* @var App\Models\Offer $data 8*/ ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src='https://rawgit.com/seiyria/bootstrap-slider/master/dist/bootstrap-slider.js'></script>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/seiyria/bootstrap-slider/master/dist/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="http://seiyria.com/bootstrap-slider/css/bootstrap.min.css">

<form action="?c=offer&a=add" method="post">
    <div class="form-group">
        <label for="name">Názov</label>
        <input name="name" type="text" class="form-control" id="name" >
    </div>
    <div class="text-center text-danger mb-3">
        <?= @$data['nameError'] ?>
    </div>
    <div class="form-group">
        <label for="description">Popis</label>
        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="imgpath">Cesta k fotke</label>
        <textarea name="imgpath" class="form-control" id="imgpath" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Cena produktu</label>
        <p><input name="price" type="text" onchange="RGBChange()" class="span2" value="" data-slider-min="0" data-slider-max="12" data-slider-step="0.05" data-slider-value="5" data-slider-id="GC" id="G"/></p>
        <input id="val" type="text" class="form-control">

        <script>
            var RGBChange = function() {
                $("#val").val(g.getValue());
            };

            var g = $('#G').slider()
                .on('slide', RGBChange)
                .data('slider');
        </script>

    </div>
    <div class="text-center text-danger mb-3">
        <?= @$data['priceError'] ?>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Pridať</button>
</form>
