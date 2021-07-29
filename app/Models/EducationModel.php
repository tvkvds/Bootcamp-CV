<?php

namespace App\Models;

use Exception;

class EducationModel extends Model
{
    // Name of the table
    protected $model = "educations";

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
    
    public static function userEducations($user_id)
    {
        try 
        {
            $educationsModel = new EducationModel();
            return $educationsModel::getAllFromUser($user_id);
        }
        catch(Exception $e) 
        {
            return "No educations where found: " . $e;
        }
    }
}