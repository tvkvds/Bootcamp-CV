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

    public function user()
    {
        
        #hardcoded atm
        View::render('jobs/user.view', ['jobs'=>[
            ['function' => 'Webmaster - content manager', 'company' => 'zzp', 'responsibilities' => 'Developing and maintaining a wordpress site and creating digital products with related content.', 'started' => '2011', 'ended' => '2019'],
            ['function' => 'JS and digital content aid', 'company' => 'volunteering', 'responsibilities' => 'Advising on and creating a digital content strategy, fixing/editing JS code', 'started' => '2017', 'ended' => '']
        ]]);
    }
}