<?php /** @var Array $data */
$layout = 'no';
$counter = 0;
?>

<div id="suppliers-table">
    <table>
        <tr>
            <th>Firma</th>
            <th>Company</th>
            <th>Slogan</th>
        </tr>
        <?php foreach ($data as $row) { ?>
            <?php if ($counter == 3) { ?>
                <tr><?=$row?></tr>
                <?php $counter++ ?>
            <?php } else { ?>
                <th><?=$row?></th>
                <?php $counter = 0 ?>
            <?php } ?>
        <?php } ?>
    </table>
</div>
