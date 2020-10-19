<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    protected $table = 'projects_info';
    // public $timestamps = false;

    protected $fillable = [
        'summary', 'time', 'problem', 'precedent', 'justification', 'generalObjective', 'specificObjetive', 'hopedResults', 'hopedEfects', 'project_data_id'
    ];

    public function ProjectsData_info()
    {
        return $this->belongsTo(ProjectData::class);
    }
}
