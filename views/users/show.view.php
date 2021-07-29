<?php require 'views/partials/header.view.php' ?>

<div class="main">

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

  <h3>Hobbies</h3>

  <?php foreach ($vars['hobbies'] as $hobby) : ?>
    <ul>
      <li><?= $hobby->hobby?></li>
      <li><?= $hobby->description?></li>
    </ul>
    <br>
  <?php endforeach ;?>

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

  <h3>Projects</h3>
    
  <?php foreach ($vars['projects'] as $project) : ?>
    <ul>
      <li><?= $project->name?></li>
      <li><?= $project->source?></li>
      <li><?= $project->role?></li>
      <li><?= $project->live?></li>
    </ul>
    <br>
  <?php endforeach ;?>

  <h3>Skills</h3>

  <?php foreach ($vars['skills'] as $skill) : ?>
    <ul>
      <?= ($skill->in_progress) ? "<li>learning</li>" : null; ?>
      <li><?= $skill->skill?></li>
      <li><?= $skill->category?></li>
      <?= ($skill->description) ? "<li>" . $skill->description . "</li>" : null; ?>
    </ul>
    <br>
  <?php endforeach ;?>


<div>
 
<?php require 'views/partials/footer.view.php' ?>