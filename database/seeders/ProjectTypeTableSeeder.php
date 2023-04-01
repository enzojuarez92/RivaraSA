<?php

use Illuminate\Database\Seeder;
use App\ProjectType;
use App\ProjectField;

class ProjectTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectType = ProjectType::create(['name' => 'Página web', 'created_at' => now()]);
        $projectType->save();

        $projectType = ProjectType::create(['name' => 'Aplicación web', 'created_at' => now()]);
        $projectType->save();

        $projectType = ProjectType::create(['name' => 'Aplicación mobile', 'created_at' => now()]);
        $projectType->save();

        //------------//

        ProjectField::create([
            'name' => 'cliente',
            'label' => 'Cliente',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 40,
            'min' => null,
            'max' => null,
            'project_type_id' => 1,
            'created_at' => now()
        ])->save();

        ProjectField::create([
            'name' => 'urlpag',
            'label' => 'URL de la pagina',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => null,
            'min' => null,
            'max' => null,
            'project_type_id' => 1,
            'created_at' => now()
        ])->save();

        ProjectField::create([
            'name' => 'lengs',
            'label' => 'Lenguajes de programación utilizados',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => null,
            'min' => null,
            'max' => null,
            'project_type_id' => 1,
            'created_at' => now()
        ])->save();

        ProjectField::create([
            'name' => 'desc',
            'label' => 'Descripcion',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 200,
            'min' => null,
            'max' => null,
            'project_type_id' => 1,
            'created_at' => now()
        ])->save();

        //------------//

        ProjectField::create([
            'name' => 'cliente',
            'label' => 'Cliente',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 40,
            'min' => null,
            'max' => null,
            'project_type_id' => 2,
            'created_at' => now()
        ])->save();

        ProjectField::create([
            'name' => 'sistops',
            'label' => 'Sistemas operativos',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 100,
            'min' => null,
            'max' => null,
            'project_type_id' => 2,
            'created_at' => now()
        ])->save();

        ProjectField::create([
            'name' => 'desc',
            'label' => 'Descripcion',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 200,
            'min' => null,
            'max' => null,
            'project_type_id' => 2,
            'created_at' => now()
        ])->save();

        //------------//

        ProjectField::create([
            'name' => 'cliente',
            'label' => 'Cliente',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 40,
            'min' => null,
            'max' => null,
            'project_type_id' => 3,
            'created_at' => now()
        ])->save();

        ProjectField::create([
            'name' => 'sistops',
            'label' => 'Sistemas operativos',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 100,
            'min' => null,
            'max' => null,
            'project_type_id' => 3,
            'created_at' => now()
        ])->save();

        ProjectField::create([
            'name' => 'desc',
            'label' => 'Descripcion',
            'nullable' => false,
            'type' => 'text',
            'data_type' => 'string',
            'minlength' => null,
            'maxlength' => 200,
            'min' => null,
            'max' => null,
            'project_type_id' => 3,
            'created_at' => now()
        ])->save();

    }
}
