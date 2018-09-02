<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['title', 'description_text', 'description_html'];
    // protected $guarded = ['_token', 'created_at'];

}
