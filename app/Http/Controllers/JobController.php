<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\JobModel;
use App\Libraries\View;
use PDO;

class JobController extends Controller
{
    public function index()
    {
        $jobModel = new JobModel();

        View::render('jobs/index.view', [
            'jobs' => $jobModel::all(),
            
        ]);
    }

    public function user($user_id = null)
    {   
        $user_id = 2;
        
        $jobModel = new JobModel();
        
        View::render('jobs/show.view', [
           'jobs' => $jobModel::getAllFromUser($user_id),
            ]);
    }
}