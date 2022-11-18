<?php /** @var \App\Models\Offer[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>

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
    <div class="row mb-2">
        <?php foreach ($data as $row) { ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <h3 class="mb-0"><?=$row->getName()?></h3>
                        <p class="card-text mb-auto"><?=$row->getDescription()?></p>
                        <p href="#" class="change-color-to-brown"><?=$row->getPrice()?>€
                        <?php if ($auth->isLogged()) { ?>
                            <a class="link-secondary" href="?c=offer&a=edit&id=<?=$row->getId()?>"><img class="logo small-icon" src="public/img/editIcon.png" alt="Logo"></a>
                            <a class="link-secondary" href="?c=offer&a=delete&id=<?=$row->getId()?>"><img class="logo small-icon" src="public/img/deleteIcon.jpg" alt="Logo"></a>
                        <?php } ?>
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="<?=$row->getImgpath()?>" alt="Product" class="bd-placeholder-img post-image">
                   </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php if ($auth->isLogged()) { ?>
        <br>
        <a class="link-secondary" href="?c=offer&a=add"><img class="logo bigger-icon center-photo" src="public/img/plusIcon.png" alt="Logo"></a>
        <br>
    <?php } ?>
</body>