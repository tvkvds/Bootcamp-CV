<?php

namespace App\Models;
use Exception;

class JobModel extends Model
{
    // Name of the table
    protected $model = "jobs";

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

    public static function userJobs($user_id)
    {
        try 
        {
            $jobModel = new JobModel();
            return $jobModel::getAllFromUser($user_id);
        }
        catch(Exception $e) 
        {
            return "No jobs where found: " . $e;
        }
    }
}