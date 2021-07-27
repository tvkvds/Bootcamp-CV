<?php

use App\Middleware\CheckLogin;

$middleware = new CheckLogin;

$router->get('', 'App/Http/Controllers/HomeController.php@index');

if ($middleware->isLoggedIn) {
    $router->get('users', 'App/Http/Controllers/UserController.php@index');
}
$router->get('users/user', 'App/Http/Controllers/UserController.php@user');

$router->get('login', 'App/Http/Controllers/LoginController.php');
$router->get('logout', 'App/Http/Controllers/LoginController.php@logout');

$router->get('educations', 'App/Http/Controllers/EducationController.php@index');
$router->get('educations/user', 'App/Http/Controllers/EducationController.php@user');

$router->get('skills', 'App/Http/Controllers/SkillController.php@index');
$router->get('skills/user', 'App/Http/Controllers/SkillController.php@user');

$router->get('jobs', 'App/Http/Controllers/JobController.php@index');
$router->get('jobs/user', 'App/Http/Controllers/JobController.php@user');

$router->get('hobbies', 'App/Http/Controllers/HobbyController.php@index');
$router->get('hobbies/user', 'App/Http/Controllers/HobbyController.php@user');

$router->get('projects', 'App/Http/Controllers/ProjectController.php@index');
$router->get('projects/user', 'App/Http/Controllers/ProjectController.php@user');
