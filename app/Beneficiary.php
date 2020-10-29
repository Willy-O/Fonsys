<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $table = 'beneficiaries'; 
    // public $timestamps = false;

    protected $fillable = [
        'name',
        'lastname',
        'dateBorn', 
        'email', 
        'homeAddress', 
        'codeCellPhone',
        'cellPhone', 
        'codeHomePhone',
        'homePhone', 
        'education', 
        'ethnicGroup', 
        'workAddress', 
        'publicWorker', 
        'workInstitute', 
        'conmunity', 
        'finance', 
        'typeFinance',
        'gender', 
        'cedula'
    ];

    public function ProjectData_beneficiary()
    {
        return $this->belongsTo(ProjectData::class);
    }
}     
