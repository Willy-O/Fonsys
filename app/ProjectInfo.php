<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    protected $table = 'prjectsInfo';

    protected $fillable = [
        'summary', 'time', 'problem', 'precedent', 'justification', 'generalObjetive', 'specificObjetive', 'hopedResults', 'hopedEfects',
    ];

    public function ProjectsData_info()
    {
        return $this->belongsTo(ProjectData::class);
    }
}
