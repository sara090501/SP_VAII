<?php /* @var App\Models\Contact $data 8*/ ?>

<form action="?c=contact&a=add" method="post" name="addContact">
    <div class="container padding prevent-select">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header text-white contact-labels"><i class="fa fa-envelope"></i>KONTAKTUJTE NÁS</div>
                    <div class="card-body">
                        <div class="text-center text-danger mb-3">
                            <?= @$data['error'] ?>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="name-input">Meno</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Vložte meno" required="">
                            </div>
                            <div class="form-group">
                                <label for="email-input">E-mailová adresa</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Vložte email" required="">
                            </div>
                            <div class="form-group">
                                <label for="message-input">Správa</label>
                                <textarea name="message" type="message" class="form-control" id="message" rows="6" required=""></textarea>
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
</form>