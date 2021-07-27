<?php require 'views/partials/header.view.php' ?>

<div class="main">

    <h3>Skills</h3>
    
    <?php foreach ($vars['skills'] as $skill) : ?>
        <ul>
            <?= ($skill->in_progress) ? "<li>learning</li>" : null; ?>
            <li><?= $skill->skill?></li>
            <li><?= $skill->category?></li>
            <?= ($skill->description) ? "<li>" . $skill->description . "</li>" : null; ?>
         </ul>
    <?php endforeach ;?>
        
</div>

<?php require 'views/partials/footer.view.php' ?>