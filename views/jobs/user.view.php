<?php require 'views/partials/header.view.php' ?>

<!--
            ['function' => '', 'company' => '', 'responsibilities' => '', 'started' => '','ended' => ''],
-->     

<div class="main">
  
<div>
<?php $jobs = $vars['jobs']; ?>
  <ul>
  <?php foreach ($jobs as $job) : ?>
    <li><?= 'Job: ' . $job['function'] . ' - ' . $job['company']; ?></li>
    <li><?= $job['responsibilities'];?></li>
    <li><?= $job['started'] . ' - ' . $job['ended'];?> </li>
    <br>
    <?php endforeach; ?>
  </ul>
</div>

<?php require 'views/partials/footer.view.php' ?>