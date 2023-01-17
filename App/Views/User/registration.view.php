<?php
/** @var Array $data */
?>

<script src="public/js/registration.js"></script>
<script src="public/js/validation.js"></script>

<div class="container body-size">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h3 class="card-title text-center">Registrácia</h3>
                    <form action="?c=user&a=registration" method="post" name="registration" onsubmit="return validationOfRegistration()" >
                        <div class="form-group">
                            <label for="firstName">Meno</label>
                            <p id="firstName-input" hidden></p>
                            <input name="firstName" type="text" class="form-control" placeholder="Janko" id="firstName"">
                        </div>
                        <div class="text-center text-danger mb-3">
                            <?= @$data['firstNameError'] ?>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Priezvisko</label>
                            <p id="lastName-input" hidden></p>
                            <input name="lastName" type="text" class="form-control" placeholder="Mrkvička" id="lastName">
                        </div>
                        <div class="text-center text-danger mb-3">
                            <?= @$data['lastNameError'] ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <p id="email-input" hidden></p>
                            <input name="email" type="text" class="form-control" placeholder="janko.mrkvicka@example.com" id="email">
                        </div>
                        <div class="text-center text-danger mb-3">
                            <?= @$data['emailError'] ?>
                        </div>
                        <div class="form-group">
                            <label for="login-input">Prezývka</label>
                            <p id="login-input" hidden></p>
                            <input name="login" type="text" class="form-control" placeholder="janci2" id="login">
                        </div>
                        <div class="text-center text-danger mb-3">
                            <?= @$data['loginError'] ?>
                        </div>
                        <div class="form-group">
                            <label for="password-input">Heslo</label>
                            <p id="password-input" hidden></p>
                            <input name="password" type="password" class="form-control" placeholder="JankoJeSuper123" id="password"">
                            <input id="password-checkbox" type="checkbox" onclick="visibilityOfPassword()">
                            <img class="icon-size" src="public/img/passwordOpenEyeIcon.png" alt="Password Open Eye Icon">
                        </div>
                        <div class="text-center text-danger mb-3">
                            <?= @$data['passwordError'] ?>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Telefónne číslo</label>
                            <p id="phone-number-input" hidden></p>
                            <input name="phoneNumber" type="text" class="form-control" placeholder="+421234567890" id="phoneNumber">
                        </div>
                        <div class="text-center text-danger mb-3">
                            <?= @$data['phoneNumberError'] ?>
                        </div>
                        <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Odoslať</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
