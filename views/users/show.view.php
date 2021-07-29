<?php require 'views/partials/header.view.php' ?>

<?php $user = $vars['users'][0];?>
<div class="container border" >
  <div class="row">

    <div class="p-5">
     <h1 class="px-3">Hi there, I'm <?= $user->first_name?></h1>
    </div>
   <div class="d-flex justify-content-end p-2">
     <a href="<?=$user->github?>" class="px-1"><i class="fab fa-github fa-3x p-1"></i></a>
     <a href="<?=$user->linkedin?>" class="px-1"><i class="fab fa-linkedin fa-3x p-1"></i></a>
     <a href="<?=$user->email?>" class="px-1"><i class="fas fa-envelope-square fa-3x p-1"></i></a>
    </div>
   <div class="container p-3 px-5">
      <p><b><?= $user->introduction;?></b></p>
     <p><?= $user->background;?></p>
      <span><?=$user->tagline?></span>
      <span><?=$user->region?></span>
     <span><?=$user->birthyear?></span>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="row px-5">
        <h3 class="p-3">Education</h3>
        <ul>
          <?php foreach ($vars['educations'] as $education) : ?>
            <li class="py-3">
              <?= $education->education;?><br>
              <?= $education->institution;?><br>
              <?php if ($education->started === $education->finished) : ?>
              <?= $education->started;?><br>
              <?php else :?>
              <?php $education->started . ' - ' . $education->finished?>
              <?php endif;?>
            </li>
          <?php endforeach ;?>
        </ul>
      </div>
      <div class="row px-5">
        <h3 class="p-3">Skills</h3>
        <h6 class="p-3">Learning</h3>
        <?php foreach ($vars['skills'] as $skill) : ?>
          <?php if ($skill->in_progress) :?>
        <ul>
          <li><?= $skill->skill?></li>
          <li><?= $skill->category?></li>
          <?= ($skill->description) ? "<li>" . $skill->description . "</li>" : null; ?>
        </ul>
        <?php endif;?>
        <?php endforeach ;?>
        <h6 class="p-3">Acquired</h3>
        <?php foreach ($vars['skills'] as $skill) : ?>
          <?php if (!$skill->in_progress) :?>
        <ul>
          <li><?= $skill->skill?></li>
          <li><?= $skill->category?></li>
          <?= ($skill->description) ? "<li>" . $skill->description . "</li>" : null; ?>
        </ul>
        <?php endif;?>
        <?php endforeach ;?>
      </div>
    </div>
    <div class="col">
      <div class="row px-5">
        <h3 class="p-3">Jobs</h3>
        <?php foreach ($vars['jobs'] as $job) : ?>
        <ul>
          <li><?= $job->function;?></li>
          <li><?= $job->company;?></li>
          <li><?= $job->responsibilities;?></li>
          <li><?= $job->started;?></li>
          <li><?= $job->ended;?></li>
        </ul>
        <?php endforeach ;?>
      </div>
      <div class="row px-5">
        <h3 class="p-3">Hobbies</h3>
        <?php foreach ($vars['hobbies'] as $hobby) : ?>
        <ul>
          <li><?= $hobby->hobby?></li>
          <li><?= $hobby->description?></li>
        </ul>
        <?php endforeach ;?>
      </div>
    </div>
  </div>
</div>
<?php require 'views/partials/footer.view.php' ?>