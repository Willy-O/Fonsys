<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'agreement', 'duration',
    ];

    public function ProjectData_contract()
    {
        return $this->belongsTo(ProjectData::class);
    }
}
