<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\ProjectModel;
use App\Libraries\View;
use PDO;

class ProjectController extends Controller
{
    public function index()
    {
        $projectModel = new ProjectModel();

        View::render('projects/index.view', [
            'projects' => $projectModel::all(),
            
        ]);
    }

    public function user($user_id = null)
    {   
        $user_id = 2;
        
        $projectModel = new ProjectModel();
        
        View::render('projects/show.view', [
           'projects' => $projectModel::getAllFromUser($user_id),
            ]);
    }
}