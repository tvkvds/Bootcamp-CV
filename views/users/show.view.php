<?php require 'views/partials/header.view.php' ?>

<div class="main">
  <?php var_dump($vars); ?>
  <h3>User</h3>

  <?php foreach ($vars['users'] as $user) : ?>
        <ul>
            
            <li><?= $user->first_name;?></li>
            <li><?= $user->last_name;?></li>
            <li><?= $user->tagline;?></li>
            <li><?= $user->github;?></li>
            <li><?= $user->linkedin;?></li>
            <li><?= $user->region;?></li>
            <li><?= $user->introduction;?></li>
            <li><?= $user->background;?></li>
            <li><?= $user->birthyear;?></li>
            
            
         </ul>
         <br>
    <?php endforeach ;?>

<div>
 

<?php require 'views/partials/footer.view.php' ?>