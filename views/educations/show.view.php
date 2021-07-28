<?php require 'views/partials/header.view.php' ?>

<div class="main">

<h3>Educations</h3>

    <?php foreach ($vars['educations'] as $education) : ?>
        <ul>
            <li><?= $education->education;?></li>
            <li><?= $education->institution;?></li>
            <li><?= $education->started;?></li>
            <li><?= $education->finished;?></li>
        </ul>
        <br>
    <?php endforeach ;?>

</div>

<?php require 'views/partials/footer.view.php' ?>