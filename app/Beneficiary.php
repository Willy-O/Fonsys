<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $table = 'beneficiaries'; 
    public $timestamps = false;

    protected $fillable = [
        'name', 'lastname', 'dateBorn', 'gender', 'email', 'homeAddress', 'cellphone', 'homephone', 'education', 'ethnicGroup', 'workAddress', 'publicWorker', 'workInstitute', 'conmunity', 'finance', 'typeFinance',
    ];

    public function ProjectData_beneficiary()
    {
        return $this->belongsTo(ProjectData::class);
    }
}     
