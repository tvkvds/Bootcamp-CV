<?php

namespace App\Http\Controllers;

use App\Libraries\MySql;
use App\Models\SkillModel;
use App\Libraries\View;
use PDO;

class SkillController extends Controller
{
    public function index()
    {
        $skillModel = new SkillModel();

        View::render('skills/index.view', [
            'skills' => $skillModel::all(),
            
        ]);
    }

    public function user()
    {
        #hardcoded atm
        View::render('skills/user.view', [
            'skills' => [
            ['skill' => 'HTML', 'description' => '', 'category' => 'Development', 'in_progress' => '0'],
            ['skill' => 'JS', 'description' => '', 'category' => 'Development', 'in_progress' => '0'],
            ['skill' => 'PHP', 'description' => '', 'category' => 'Development', 'in_progress' => '1']]
            ]);
    }
}