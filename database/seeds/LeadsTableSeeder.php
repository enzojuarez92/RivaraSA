<?php

use App\Lead;
use Illuminate\Database\Seeder;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 5; $i < 100; $i++) {
            $data = Lead::create([
                'id' => $i,
                'name' => '',
                'email' => 'dasd@asd.com',
                'telefono' => '01131851347',
                'fuente' => '3',
                'conocio' => '1',
                'subject' => 'sadas',
                'message' => 'asdas',
            ]);
            $data->save();
        }

        for ($i = 200; $i < 400; $i++) {
            $data = Lead::create([
                'id' => $i,
                'name' => '',
                'email' => 'dasd@asd.com',
                'telefono' => '01131851347',
                'fuente' => '4',
                'conocio' => '2',
                'subject' => 'sadas',
                'message' => 'asdas',
            ]);
            $data->save();
        }

        for ($i = 500; $i < 666; $i++) {
            $data = Lead::create([
                'id' => $i,
                'name' => '',
                'email' => 'dasd@asd.com',
                'telefono' => '01131851347',
                'fuente' => '5',
                'conocio' => '2',
                'subject' => 'sadas',
                'message' => 'asdas',
            ]);
            $data->save();
        }
    }
}
