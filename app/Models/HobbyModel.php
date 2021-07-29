<?php

namespace App\Models;
use Exception;

class HobbyModel extends Model
{
    // Name of the table
    protected $model = "hobbies";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $guarded = [
        'id',
        'deleted',
    ];

    public function __construct()
    {
        parent::__construct($this->model);
    }

    public static function userHobbies($user_id)
    {
        try 
        {
            $hobbiesModel = new HobbyModel();
            return $hobbiesModel::getAllFromUser($user_id);
        }
        catch(Exception $e) 
        {
            return "No hobbies where found: " . $e;
        }
    }
}