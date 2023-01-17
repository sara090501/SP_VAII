<?php /** @var \App\Core\IAuthenticator $auth */
?>

<script src="public/js/suppliers.js"></script>

<div class="row padding body-size">
    <div class="col-4">
        <img src="public/img/coffeeTruck.png" alt="Coffee Home" class="center-photo">
    </div>
    <div class="col-4 center">
        <a class="btn btn-sm btn-outline-secondary button" onclick="getAllSuppliers()" href="#">
            <h4>Zobraziť</h4>
            <h4>dodávateľov</h4>
        </a>
    </div>
    <div class="col-4">
        <img src="public/img/coffeeCup.png" alt="Coffee Home" class="center-photo">
    </div>
</div>
<div>
    <p><span id="output"></span></p>
</div>
<?php if ($auth->isLogged()) { ?>
    <?php if ($auth->getLoggedLogin() == 'admin') { ?>
        <br>
        <a class="link-secondary" href="?c=supplier&a=add"><img class="logo bigger-icon center-photo" src="public/img/plusIcon.png" alt="Logo"></a>
        <br>
    <?php } ?>
<?php } ?>