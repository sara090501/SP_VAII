<?php /* @var App\Models\Supplier $data 8*/ ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script type="text/javascript" src='https://rawgit.com/seiyria/bootstrap-slider/master/dist/bootstrap-slider.js'></script>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/seiyria/bootstrap-slider/master/dist/css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="http://seiyria.com/bootstrap-slider/css/bootstrap.min.css">

<script src="public/js/validation.js"></script>

<form action="?c=supplier&a=add" method="post" name="supplierAdd" onsubmit="return validationOfSupplier()">
    <div class="form-group">
        <label for="company">Firma</label>
        <p id="company-input" hidden></p>
        <input name="company" type="text" class="form-control" id="company">
    </div>
    <div class="text-center text-danger mb-3">
        <?= @$data['companyError'] ?>
    </div>
    <div class="form-group">
        <label for="country">Krajina</label>
        <p id="country-input" hidden></p>
        <textarea name="country" class="form-control" id="country" rows="3"></textarea>
    </div>
    <div class="text-center text-danger mb-3">
        <?= @$data['countryError'] ?>
    </div>
    <div class="form-group">
        <label for="slogan">Slogan</label>
        <p id="slogan-input" hidden></p>
        <textarea name="slogan" class="form-control" id="slogan" rows="3"></textarea>
    </div>
    <div class="text-center text-danger mb-3">
        <?= @$data['sloganError'] ?>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Pridať</button>
</form>
