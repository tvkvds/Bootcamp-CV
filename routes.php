<?php

use App\Middleware\CheckLogin;

$middleware = new CheckLogin;

$router->get('', 'App/Http/Controllers/HomeController.php@index');

$router->get('users', 'App/Http/Controllers/UserController.php@index');
$router->get('users/show', 'App/Http/Controllers/UserController.php@user');

$router->get('login', 'App/Http/Controllers/LoginController.php');
$router->get('logout', 'App/Http/Controllers/LoginController.php@logout');

$router->get('educations', 'App/Http/Controllers/EducationController.php@index');
$router->get('educations/show', 'App/Http/Controllers/EducationController.php@user');

$router->get('skills', 'App/Http/Controllers/SkillController.php@index');
$router->get('skills/show', 'App/Http/Controllers/SkillController.php@user');

$router->get('jobs', 'App/Http/Controllers/JobController.php@index');
$router->get('jobs/show', 'App/Http/Controllers/JobController.php@user');

$router->get('hobbies', 'App/Http/Controllers/HobbyController.php@index');
$router->get('hobbies/show', 'App/Http/Controllers/HobbyController.php@user');

$router->get('projects', 'App/Http/Controllers/ProjectController.php@index');
$router->get('projects/show', 'App/Http/Controllers/ProjectController.php@user');





