<?php require 'views/partials/header.view.php' ?>

<div class="main">
<div>
<?php $educations = $vars['educations']; ?>
  <ul>
  <?php foreach ($educations as $education) : ?>
    <li><?=$education['education'] . ' at ' .$education['institution'] . ' started ' . $education['started'];?></li>
    <?php endforeach; ?>
  </ul>
</div>
</div>

<?php require 'views/partials/footer.view.php' ?>