<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'ticket', 'files', 'projects_data_id'
    ];

    public function ProjectsData_tracking()
    {
        return $this->belongsTo(ProjectDat::class);
    }
}
