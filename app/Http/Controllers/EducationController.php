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

    public function user()
    {
        #hardcoded atm
        View::render('educations/user.view', ['educations'=>[
            ['institution' => 'Harvard', 'education' => 'CS50x', 'started' => '2019', 'finished' => '2019'],
            ['institution' => 'Udemy - Colt Steele', 'education' => 'web developer bootcamp 2021', 'started' => '2020', 'finished' => '2020'],
            ['institution' => 'CodeGorillas', 'education' => 'Web developer backend bootcamp', 'started' => '2021', 'finished' => '2021']
        ]]);
    }
}