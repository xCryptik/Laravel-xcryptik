<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //
    protected $fillable = [
        'title','description','trainer',
    ];
    protected $table = 'trainings';
}
