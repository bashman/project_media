<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectMediaFiles()
    {
        return $this->hasMany(ProjectMedia::class, 'project_id');
    }
}
