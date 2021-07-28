<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\ApplicantModel;
use App\Libraries\View;
use PDO;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicantModel = new ApplicantModel();

        View::render('applicants/index.view', [
            'applicants' => $applicantModel::all(),
            
        ]);
    }

    public function user($id = null)
    {   
        $id = 2;
        
        $applicantModel = new ApplicantModel();
        
        View::render('applicants/show.view', [
           'applicants' => $applicantModel::getAllFrom('id',$id),
            ]);
    }
}