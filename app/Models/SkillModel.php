<?php

namespace App\Models;

use Exception;

class SkillModel extends Model
{
    // Name of the table
    protected $model = "skills";

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

    
    public static function userSkills($user_id)
    {
        try 
        {
            $skillModel = new SkillModel();
            return $skillModel::getAllFromUser($user_id);
        }
        catch(Exception $e) 
        {
            return "No skills where found: " . $e;
        }
    }
}