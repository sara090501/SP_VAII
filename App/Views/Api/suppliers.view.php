<?php /** @var String[][] $data */
$layout = 'no';
?>

<div id="suppliers-table">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Firma</th>
            <th scope="col">Krajina</th>
            <th scope="col">Slogan</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php foreach ($data as $row) { ?>
            <tr>
                <?php foreach ($row as $element) { ?>
                        <th scope="row"><?=$element?></th>
                <?php } ?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
