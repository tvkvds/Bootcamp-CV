<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <label>First name</label> <?= $vars['name'] ?>
    <label>fruit</label> <?= $vars['nog_een_array'][0]?>
    <label>fruit</label> <?= $vars['nog_een_array'][1]?>
</div>

<!--
[
            'name' => 'My Name',
            'nog_een_array' => [
                'apple',
                'banana',
            ]
        ]-->
        <?php require 'views/partials/footer.view.php' ?>
            