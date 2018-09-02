<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin_user extends Model
{

	protected $table = 'admin_users';

    // protected $fillable = [''];
    protected $guarded = ['created_at'];

}
