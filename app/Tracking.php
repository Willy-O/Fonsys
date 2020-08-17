<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'ticket', 'files',
    ];

    public function ProjectsData_tracking()
    {
        return $this->belongsTo(ProjectDat::class);
    }
}
