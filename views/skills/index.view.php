<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <?php var_dump($vars['skills'])?>
<!--
    <?php foreach ($vars['skills'] as $skill) : ?>
        <ul>
            <li><?= $skill->skill?></li>
            <li><?= $skill->description?></li>
            <li><?= $skill->category?></li>
            <?php if ($skill->in_progress === '1'): ?>
            <li>learning</li>
            <?php endif; ?>
          
        </ul>
    <?php endforeach ;?>
            -->
</div>

<?php require 'views/partials/footer.view.php' ?>