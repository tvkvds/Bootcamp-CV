<?php require 'views/partials/header.view.php' ?>

<!--
            ['skill' => 'HTML', 'description' => '', 'category' => 'Development', 'in_progress' => '0'],
-->     

<div class="main">
  
<div>
<?php $skills = $vars['skills']; ?>
  <ul>
  <?php foreach ($skills as $skill) : ?>
    <li><?= 'Skill: ' . $skill['skill'] . ' - ' . $skill['category'] . ' - ' . $skill['in_progress'];?></li>
    <?php endforeach; ?>
  </ul>
</div>

<?php require 'views/partials/footer.view.php' ?>