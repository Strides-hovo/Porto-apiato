<?php

namespace App\Containers\Todo\Todo\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Todo extends ParentModel
{
    protected $fillable = [
        'name', 'status'
    ];
}
