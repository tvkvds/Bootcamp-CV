<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\HobbyModel;
use App\Libraries\View;
use PDO;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbyModel = new hobbyModel();

        View::render('hobbies/index.view', [
            'hobbies' => $hobbyModel::all(),
            
        ]);
    }

    public function user()
    {
        
        #hardcoded atm
        View::render('hobbies/user.view', ['hobbies'=>[
            ['hobbie' => 'Cooking', 'description' => 'Love trying all kinds of new recipes.'],
            ['hobbie' => 'Medieval festivals', 'description' => 'Love the music, atmosphere, as visitor as well as volunteer']
        ]]);
    }
}