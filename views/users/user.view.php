<?php require 'views/partials/header.view.php' ?>

<div class="main">
  <?php $user = $vars['users']; ?>
<div>
  <h3><?= $user['first_name'] . ' ' . $user['last_name'];?></h3>
  <span><?= $user['tagline'];?></span>
  <br>
  <a href="<?= $user['github']; ?>"><i class="fab fa-github"></i></a>
  <a href="<?= $user['linkedin']; ?>"><i class="fa-brands fa-linkedin"></i></a>
  <a href="<?= $user['email']; ?>"><i class="fa-solid fa-envelope"></i></a>
  <br>
  <li><?= $user['region'];?></li>
  <li><?= $user['birthyear'];?></li>
  <li><?= $user['introduction'];?></li>
  <li><?= $user['background'];?></li>
</div>
</div>

<?php require 'views/partials/footer.view.php' ?>