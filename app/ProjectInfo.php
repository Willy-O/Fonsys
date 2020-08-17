<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    protected $table = 'projectsInfo';
    public $timestamps = false;

    protected $fillable = [
        'summary', 'time', 'problem', 'precedent', 'justification', 'generalObjective', 'specificObjetive', 'hopedResults', 'hopedEfects',
    ];

    public function ProjectsData_info()
    {
        return $this->belongsTo(ProjectData::class);
    }
}
