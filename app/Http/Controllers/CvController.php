<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\CvModel;
use App\Libraries\View;
use PDO;

class CvController extends Controller
{
    public function index()
    {
        $cvModel = new CvModel();

        View::render('cvs/index.view', [
            
            
        ]);
    }

    public function user($id = null)
    {   
        $id = 2;
        
        $cvModel = new CvModel();
        
        View::render('cvs/show.view', [
           
            ]);
    }
}