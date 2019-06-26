<?php

namespace App\Helpers;

use App\Configuration;
use App\Post;
use App\Project;

class ConfigHelper
{

    public static function PostExist()
    {
        $post = Post::publicados()->count();
        return ($post > 0) ? true : false;
    }

    public static function ProjectsExist()
    {
        $proyectos = Project::all()->count();
        return ($proyectos > 0) ? true : false;
    }

    public static function get(string $clave)
    {
        $config = Configuration::find(1);
        return $config->$clave;
    }

}
