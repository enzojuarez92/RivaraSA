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

    public static function getServicios()
    {
        // array servicios con las claves, sigla, titulo.
        $servicios = [
            'acopio-logistica-comercializacion' => [
                'sigla' => 'acopio',
                'titulo' => 'Acopio, logística y comercialización',
            ],
            'arrendamientos-asociaciones' => [
                'sigla' => 'arrendamiento',
                'titulo' => 'Arrendamientos y asociaciones',
            ],
            'agroquimicos-fertilizantes' => [
                'sigla' => 'agroquimicos',
                'titulo' => 'Agroquímicos y fertilizantes',
            ],
            'combustibles' => [
                'sigla' => 'combustibles',
                'titulo' => 'Combustibles',
            ],
            'molienda' => [
                'sigla' => 'Molienda de Maiz no GMO',
                'titulo' => 'Proyectos',
            ],
            'aceites' => [
                'sigla' => 'aceites',
                'titulo' => 'Aceites y Harinas',
            ],
            'balanceados' => [
                'sigla' => 'balanceados',
                'titulo' => 'Alimentos Balanceados',
            ],
            'pop-corn' => [
                'sigla' => 'pop corn',
                'titulo' => 'pop corn',
            ]
        ];

        return $servicios;
    }

}
