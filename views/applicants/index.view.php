<?php require 'views/partials/header.view.php' ?>

<div class="main">
  
  <h3>Applicant</h3>

  <?php foreach ($vars['applicants'] as $applicant) : ?>
        <ul>
            
            <li><?= $applicant->first_name;?></li>
            <li><?= $applicant->last_name;?></li>
            <li><?= $applicant->tagline;?></li>
            <li><?= $applicant->github;?></li>
            <li><?= $applicant->linkedin;?></li>
            <li><?= $applicant->region;?></li>
            <li><?= $applicant->introduction;?></li>
            <li><?= $applicant->background;?></li>
            <li><?= $applicant->birthyear;?></li>
            
            
         </ul>
         <br>
    <?php endforeach ;?>

<div>
 

<?php require 'views/partials/footer.view.php' ?>