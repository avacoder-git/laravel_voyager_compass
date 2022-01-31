<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Subject extends Model
{
    use HasFactory;

    use Translatable;
    protected $translatable = ['property1','property2','property3','property4','property5','name',];
}
