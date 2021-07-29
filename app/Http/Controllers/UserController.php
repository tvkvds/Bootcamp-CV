<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\JobModel;
use App\Models\HobbyModel;
use App\Models\SkillModel;
use App\Models\ProjectModel;
use App\Models\EducationModel;
use App\Libraries\View;
use App\Libraries\MySql;


class UserController extends Controller
{

    public function index()
    {
        $userModel = new UserModel();

        View::render('users/index.view', [
            'users' => $userModel::all(),
            
        ]);
    }
    
        
    public function user($user_id = null)
    {   
        $user_id = 2;
        
        $userModel = new UserModel();
        
        View::render('users/show.view', [
           'users' => $userModel::getAllFromId($user_id),
           'jobs' => JobModel::userJobs($user_id),
           'hobbies' => HobbyModel::userHobbies($user_id),
           'skills' => SkillModel::userSkills($user_id),
           'projects' => ProjectModel::userProjects($user_id),
           'educations' => EducationModel::userEducations($user_id),
        ]);

    }
    

    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    public function create()
    {
        dd('create user');
    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        $data = [
            'first_name' => "Code",
            'last_name' => "Gorilla",
            'email' => "toby@codegorilla.nl",
            'password' => "q3234234q3213^^!^w23123",
            'birthday' => "1990-12-31",
            'created' => date("Y-m-d H:i:s"),
        ];

        UserModel::update($data, 1);
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}

