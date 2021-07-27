<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
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
    public function user()
    {
        
        #hardcoded atm
        View::render('users/user.view', ['users' => 
        ['first_name' => 'Tamara',
         'last_name' => 'van Klinken', 
         'tagline' => ':)',
         'email' => 'tvkvds@gmail.com',
         'region' => 'Drenthe',
         'birthyear' => '1985',
         'github' => 'http://www.github.com/tvkvds',
         'linkedin' => 'https://www.linkedin.com/in/tamara-van-klinken-8b0a7b18a/',
         'introduction' => 'ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. ',
         'background' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.']
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

