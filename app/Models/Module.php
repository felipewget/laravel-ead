<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    
    protected $fillable = ['id_course', 'title', 'order', 'unlock_after_timestamp', 'description'];

}
