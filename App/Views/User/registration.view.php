<?php
/** @var Array $data */
?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h3 class="card-title text-center">Registrácia</h3>
                    <form action="?c=user&a=registration" method="post" name="registration" onsubmit="return validationOfRegistration()" >
                        <div class="form-group">
                            <label for="firstName">Meno</label>
                            <p id="firstName-input" hidden></p>
                            <input name="firstName" type="text" class="form-control" placeholder="Janko" id="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Priezvisko</label>
                            <p id="lastName-input" hidden></p>
                            <input name="lastName" type="text" class="form-control" placeholder="Mrkvička" id="lastName">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <p id="email-input" hidden></p>
                            <input name="email" type="text" class="form-control" placeholder="janko.mrkvicka@example.com" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Telefónne číslo</label>
                            <p id="phone-number-input" hidden></p>
                            <input name="phoneNumber" type="text" class="form-control" placeholder="+421234567890" id="phoneNumber">
                        </div>
                        <button type="submit" class="btn btn-sm btn-outline-secondary submit button">Odoslať</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
