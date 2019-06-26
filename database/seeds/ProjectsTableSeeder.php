<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags1 = [1, 2];
        $tags2 = [2, 3];
        $tags3 = [1, 3];

        $data = Project::create([
            'title' => 'Mi primer pagina web',
            'url' => str_slug('Mi primer pagina web'),
            'data' => ["cliente" => "cliente 1", "urlpag" => "www.miprimerpagina.com", "lengs" => "php", "desc" => "descripcion mi primer pagina web"],
            'body' => 'contenido mi primer pagina web',
            'extract' => 'extracto mi primer pagina web',
            'project_type_id' => 1,
            'category_id' => 1,
            'created_at' => now()
        ]);
        $data->tags()->sync($tags1);
        $data->update();

        $data = Project::create([
            'title' => 'Mi segunda pagina web',
            'url' => str_slug('Mi segunda pagina web'),
            'data' => ["cliente" => "cliente 2", "urlpag" => "www.misegundapagina.com", "lengs" => "python", "desc" => "descripcion mi segunda pagina web"],
            'body' => 'contenido mi segunda pagina web',
            'extract' => 'extracto mi segunda pagina web',
            'project_type_id' => 1,
            'category_id' => 2,
            'created_at' => now()
        ]);
        $data->tags()->sync($tags2);
        $data->save();

        $data = Project::create([
            'title' => 'Mi primer app web',
            'url' => str_slug('Mi primer app web'),
            'data' => ["cliente" => "cliente 1", "sistops" => "windows, linux", "desc" => "descripcion mi primer app web"],
            'body' => 'contenido mi primer app web',
            'extract' => 'extracto mi primer app web',
            'project_type_id' => 2,
            'category_id' => 1,
            'created_at' => now()
        ]);
        $data->tags()->sync($tags1);
        $data->update();

        $data = Project::create([
            'title' => 'Mi segunda app web',
            'url' => str_slug('Mi segunda app web'),
            'data' => ["cliente" => "cliente 2", "sistops" => "windows", "desc" => "descripcion mi segunda app web"],
            'body' => 'contenido mi segunda app web',
            'extract' => 'extracto mi segunda app web',
            'project_type_id' => 2,
            'category_id' => 2,
            'created_at' => now()
        ]);
        $data->tags()->sync($tags3);
        $data->update();

        $data = Project::create([
            'title' => 'Mi primer app movil',
            'url' => str_slug('Mi primer app movil'),
            'data' => ["cliente" => "cliente 1", "sistops" => "android", "desc" => "descripcion mi primer app movil"],            
            'body' => 'contenido mi primer app movil',
            'extract' => 'extracto mi primer app movil',
            'project_type_id' => 3,
            'category_id' => 1,
            'created_at' => now()
        ]);
        $data->tags()->sync($tags2);
        $data->update();

        $data = Project::create([
            'title' => 'Mi segunda app movil',
            'url' => str_slug('Mi segunda app movil'),
            'data' => ["cliente" => "cliente 2", "sistops" => "android, ios", "desc" => "descripcion mi segunda app movil"],            
            'body' => 'contenido mi segunda app movil',
            'extract' => 'extracto mi segunda app movil',
            'project_type_id' => 3,
            'category_id' => 2,
            'created_at' => now()
        ]);
        $data->tags()->sync($tags3);
        $data->update();
    }
}
