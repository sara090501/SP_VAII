<?php /* @var \App\Models\Offer $data */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CoffeeHouse</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="public/css/css.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
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
            <textarea name="price" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$data->getPrice()?></textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Potvrdiť</button>
    </form>
</body>