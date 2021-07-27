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
        $projectsModel = new ProjectModel();

        View::render('projects/index.view', [
            'projects' => $projectsModel::all(),
            
        ]);
    }

    public function user()
    {
        $projectsModel = new ProjectModel();

        View::render('projects/show.view', [
            'projects' => $projectsModel::all(),
            
        ]);
    }
}