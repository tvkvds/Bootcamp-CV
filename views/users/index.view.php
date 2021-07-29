<?php require 'views/partials/header.view.php' ?>

<div class="main">

    <h3>Users</h3>
    
    <ul>
        <?php foreach ($vars['users'] as $user) : ?>

            <!-- static link should be made to be a dynamic link to user id represented by user name-->
            <li><a href="../users/show"><?= $user->first_name . " " . $user->last_name?></a></li>

        <?php endforeach ;?>
    </ul>

</div>

<?php require 'views/partials/footer.view.php' ?>