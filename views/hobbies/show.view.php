<?php require 'views/partials/header.view.php' ?>

<div class="main">

  <h3>Hobbies</h3>

  <?php foreach ($vars['hobbies'] as $hobby) : ?>
    <ul>
      <li><?= $hobby->hobby?></li>
      <li><?= $hobby->description?></li>
    </ul>
    <br>
  <?php endforeach ;?>

</div>

<?php require 'views/partials/footer.view.php' ?>