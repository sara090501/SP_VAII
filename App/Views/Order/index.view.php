<?php /** @var \App\Models\Offer[] $data */ ?>

<div class="row mb-2">
    <?php foreach ($data as $row) { ?>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"><?=$row->getName()?></h3>
                    <p class="card-text mb-auto"><?=$row->getDescription()?></p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="<?=$row->getImgpath()?>" alt="Product" class="bd-placeholder-img post-image">
               </div>
            </div>
        </div>
    <?php } ?>
</div>