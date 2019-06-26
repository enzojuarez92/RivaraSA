<?php

namespace App;

use App\Project;
use App\ProjectField;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    public function Fields()
    {
        return $this->hasMany(ProjectField::class, 'project_type_id');
    }

    public function Projects()
    {
        return $this->hasMany(Project::class, 'project_type_id');
    }

    public function Rules()
    {
        foreach ($this->fields as $f) {
            $result[$f->name] = $f->Rules();
        }
        return $result;
    }
    public function ErrorMessages()
    {
        $result = [];
        foreach ($this->fields as $f) {
            $result += $f->ErrorMessages();
        }
        return $result;
    }

    public function linkProjects()
    {
        return route('projects.index.filter', ['project_type' => $this]);
    }
}
