<?php /** @var \App\Models\Offer[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>

<script src="public/js/registration.js"></script>

<div class="center">
    <form method="get" action="">
        <input type="text" placeholder="Search" onkeyup="showSuggestions(this.value)">
        <p>Suggestions: <span id="output"></span></p>
    </form>
</div>
<br>
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