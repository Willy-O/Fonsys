<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'agreement', 'duration', 'project_data_id'
    ];

    public function ProjectData_contract()
    {
        return $this->belongsTo(ProjectData::class);
    }
}
