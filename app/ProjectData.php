<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectData extends Model
{
    protected $table = 'projectsData';

    protected $fillable = [
        'tittle', 'sum', 'objective', 'addressLocation', 'area', 'justification', 
    ];

    public function Beneficiary()
    {
        return $this->hasOne(Beneficiary::class);
    }

    public function Users()
    {
        return $this->hasMany(User::class);
    }

    public function ProjectInfo()
    {
        return $this->hasOne(ProjectInfo::class);
    }

    public function Contract()
    {
        return $this->hasOne(Contract::class);
    }

    public function Trackings()
    {
        return $this->hasMany(Tracking::class);
    }
}
