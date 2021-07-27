<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <?php foreach($vars['users'] as $user) : ?>
        <div><?= $user->first_name ?></div><div><?= $vars['foods'] ?></div>
    <?php endforeach ?>
</div>

<?php require 'views/partials/footer.view.php' ?>