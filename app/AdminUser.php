<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $table = 'admin_users';

    public function project()
    {
        return $this->belongsToMany(Project::class);
    }
}
