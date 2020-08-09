<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clousure extends Model
{
    protected $fillable = [
        'results', 'efects',
    ];

    public function ProjectData_clousure()
    {
        return $this->belongsTo(ProjectData::class);
    }
}
