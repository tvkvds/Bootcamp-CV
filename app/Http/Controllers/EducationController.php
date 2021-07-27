<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\EducationModel;
use App\Libraries\View;
use PDO;

class EducationController extends Controller
{
    public function index()
    {
        $educationModel = new EducationModel();

        View::render('educations/index.view', [
            'educations' => $educationModel::all(),
            
        ]);
    }

    public function user($user_id = null)
    {   
        $user_id = 2;
        
        $educationModel = new EducationModel();
        
        View::render('educations/show.view', [
           'educations' => $educationModel::getAllFromUser($user_id),
            ]);
    }
}