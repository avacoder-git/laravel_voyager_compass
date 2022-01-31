<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class News extends Model
{
    use Translatable;
    protected $translatable = ['title', 'body'];



}
