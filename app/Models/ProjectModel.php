<?php

namespace App\Models;

use Exception;

class ProjectModel extends Model
{
    // Name of the table
    protected $model = "projects";

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

    public static function userProjects($user_id)
    {
        try 
        {
            $projectModel = new ProjectModel();
            return $projectModel::getAllFromUser($user_id);
        }
        catch(Exception $e) 
        {
            return "No projects where found: " . $e;
        }
    }
}