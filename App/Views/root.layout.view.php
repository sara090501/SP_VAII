<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="public/js/script.js"></script>
</head>
<body>
<div class="container prevent-select">

    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-3 pt-1">
                <a class="link-secondary" href="public/html/Index.html"><img class="logo" src="public/img/coffeeLogo.png" alt="Logo"></a>
            </div>
            <div class="col-6 text-center">
                <a class="blog-header-logo text-dark no-underline"><h1>CoffeeHouse</h1></a>
            </div>
            <div class="col-3 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-secondary button" href="public/html/Login.html">Prihlásenie</a>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-tabs navbar-font-edit" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="?c=home&a=index"><h3>Úvod</h3></a></li>
                <li class="nav-item"><a class="nav-link" href="public/html/Offer.html"><h3>Ponuka</h3></a></li>
                <li class="nav-item"><a class="nav-link" href="?c=home&a=contact"><h3>Kontakt</h3></a></li>
            </ul>
        </div>
    </nav>

</div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>

