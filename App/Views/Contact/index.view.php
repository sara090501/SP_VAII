<?php /** @var \App\Models\Contact[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>

<br>
<a class="btn btn-sm btn-outline-secondary center-photo button" href="?c=contact&a=add">Kontaktujte nás</a>
<br>
<div class="container padding prevent-select body-size">
    <div class="row">
        <div class="col-12">
            <div class="card bg-light mb-3">
                <div class="card-header center text-white text-uppercase contact-labels"><i class="center"></i>Adresa</div>
                <div class="card-body center">
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
<div>
    <?php if ($auth->isLogged()) { ?>
        <?php if ($auth->getLoggedLogin() == 'admin') { ?>
            <div class="row mb-2">
                <?php foreach ($data as $row) { ?>
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0"><?=$row->getName()?>, </h3>
                                <h4><?=$row->getEmail()?></h4>
                                <p href="#" class="change-color-to-brown"><?=$row->getMessage()?></p>
                                <p>
                                    <a class="link-secondary" href="?c=contact&a=edit&id=<?=$row->getId()?>"><img class="logo small-icon" src="public/img/editIcon.png" alt="Logo"></a>
                                    <a class="link-secondary" onclick="return confirmContactDel(<?=$row->getId()?>)" href="?c=contact&a=delete&id=<?=$row->getId()?>"><img class="logo small-icon" src="public/img/deleteIcon.jpg" alt="Logo"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    <?php } ?>
</div>