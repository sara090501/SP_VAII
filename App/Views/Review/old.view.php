<?php /* @var \App\Models\Post[] $data */ ?>

<a href="?c=review&a=add">Pridaj</a>

<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <?php foreach ($data as $row) { ?>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0"><?=$row->getTitle()?></h3>
                    <p class="card-text mb-auto"><?=$row->getText()?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

