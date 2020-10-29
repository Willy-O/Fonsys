<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clousure extends Model
{
    // public $timestamps = false;

    protected $fillable = [
        'results', 'efects', 'project_data_id'
    ];

    public function ProjectData_clousure()
    {
        return $this->belongsTo(ProjectData::class);
    }
}
