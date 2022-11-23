<?php /** @var \App\Models\Review[] $data */
/** @var \App\Core\IAuthenticator $auth */
?>
<a class="btn btn-sm btn-outline-secondary center-photo button" href="?c=review&a=add">Pridať recenziu</a>
<div class="row mb-2 post-padding">

<?php foreach ($data as $row) { ?>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0"><?=$row->getName()?></h3>
                <p class="card-text mb-auto"><?=$row->getText()?></p>
                <?php if ($auth->isLogged()) { ?>
                    <a class="btn btn-sm btn-outline-secondary button" href="?c=review&a=delete&id=<?=$row->getId()?>">Odstrániť</a>
                <?php } ?>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="public/img/reviewer.png" alt="Reviewer" class="bd-placeholder-img post-image">
            </div>
        </div>
    </div>
<?php } ?>

</div>