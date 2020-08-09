<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'date', 'whatDo',
    ];

    public function User_log()
    {
        return $this->belongsTo(User::class);
    }
}
