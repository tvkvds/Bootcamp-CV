<?php require 'views/partials/header.view.php' ?>

<!--
            ['hobbie' => '', 'description' => ''],
-->     

<div class="main">
  
<div>
<?php $hobbies = $vars['hobbies']; ?>
  <ul>
  <?php foreach ($hobbies as $hob) : ?>
    <li><?= 'Hobby: ' . $hob['hobbie'] ; ?></li>
    <li><?= $hob['description'];?></li>
   <br>
    <?php endforeach; ?>
  </ul>
</div>

<?php require 'views/partials/footer.view.php' ?>