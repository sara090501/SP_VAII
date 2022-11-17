<?php /** @var Array $data */ ?>
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

<div class="container padding prevent-select">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-white contact-labels"><i class="fa fa-envelope"></i>KONTAKTUJTE NÁS</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Meno</label>
                            <input type="text" class="form-control" id="name" placeholder="Vložte meno" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mailová adresa</label>
                            <input type="email" class="form-control" id="email" placeholder="Vložte email" required="">
                        </div>
                        <div class="form-group">
                            <label for="message">Správa</label>
                            <textarea class="form-control" id="message" rows="6" required=""></textarea>
                        </div>
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary text-right contact-labels">Odoslať</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header text-white text-uppercase contact-labels"><i class="fa fa-home"></i>Adresa</div>
                <div class="card-body">
                    <p>Tajovského 52-60</p>
                    <p>010 01 Žilina</p>
                    <p>Slovensko</p>
                    <p>Email: coffeehouse@gmail.com</p>
                    <p>Tel. č.: +421 918 242 082</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>