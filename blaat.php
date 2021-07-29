

  

  

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

  


<div>
 
<?php require 'views/partials/footer.view.php' ?>