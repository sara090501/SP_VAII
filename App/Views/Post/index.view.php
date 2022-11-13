<?php /* @var \App\Models\Post[] $data */ ?>

<a href="?c=post&a=add">Pridaj</a>

<div class="row">
    <?php foreach ($data as $row) { ?>
    <div class="card col-2 m-2" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?=$row->getTitle()?></h5>
            <p class="card-text"><?=$row->getText()?></p>
            <a href="?c=post&a=delete&id=<?=$row->getId()?>" class="btn btn-danger">Delete</a>
            <a href="?c=post&a=delete&id=<?=$row->getId()?>" class="btn btn-primary">Edit</a>
        </div>
    </div>
    <?php } ?>
</div>
