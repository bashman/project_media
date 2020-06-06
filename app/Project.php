<?php

namespace App;

use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectMediaFiles()
    {
        return $this->hasMany(ProjectMedia::class, 'project_id');
    }



    public  function users() {
        return $this->belongsToMany(AdminUser::class)->withTimestamps();
    }

}
