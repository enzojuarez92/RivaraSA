<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectField extends Model
{
    public function ProjectType()
    {
        return $this->belongsTo(ProjectType::class, 'project_type_id');
    }

    public function Rules()
    {
        $this->nullable ? '' : $result[] = 'required';
        $this->minlength ? $result[] = 'min:'.$this->minlength : '';
        $this->maxlength ? $result[] = 'max:'.$this->maxlength : '';
        return $result;
    }

    public function ErrorMessages()
    {
        $result[$this->name.'.required'] = 'El campo '.$this->name.' es requerido.';
        $result[$this->name.'.min'] = 'El campo '.$this->name.' no debe tener menos de '.$this->minlength.' caracteres.';
        $result[$this->name.'.max'] = 'El campo '.$this->name.' no debe tener mas de '.$this->maxlength.' caracteres.';
        return $result;
    }
}
