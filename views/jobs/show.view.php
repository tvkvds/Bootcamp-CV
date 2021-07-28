<?php require 'views/partials/header.view.php' ?>

<div class="main">
  
<h3>Jobs</h3>

    <?php foreach ($vars['jobs'] as $job) : ?>
        <ul>
            <li><?= $job->function;?></li>
            <li><?= $job->company;?></li>
            <li><?= $job->responsibilities;?></li>
            <li><?= $job->started;?></li>
            <li><?= $job->ended;?></li>
        </ul>
        <br>
    <?php endforeach ;?>

<?php require 'views/partials/footer.view.php' ?>