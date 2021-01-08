<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("animales")->insert(
            [
                    'id'    => 1,
                    'corral_id' => 2,
                  'name'     => "Caballo",
                  'age' => 3,
                  'quantity'  => 5,
                  'classification'  => 'Baja peligrosidad'
            ],
        );
        \DB::table("animales")->insert(
            [
                'id'    => 2,
                'corral_id' => 1,
              'name'     => "Gallina",
              'age' => 1,
              'quantity'  => 10,
              'classification'  => 'Baja peligrosidad'
            ],
        );
        \DB::table("animales")->insert(
            [
                'id'    => 3,
                'corral_id' => 2,
              'name'     => "Toro",
              'age' => 3,
              'quantity' => 3,
              'classification'  => 'Alta peligrosidad'
            ],
        );
        \DB::table("animales")->insert(
            [
                'id'    => 4,
                'corral_id' => 3,
              'name'     => "Perro",
              'age' => 2,
              'quantity' => 2,
              'classification'  => 'Alta peligrosidad'
            ],
        );
        \DB::table("animales")->insert(
            [
                'id'    => 5,
                'corral_id' => 2,
              'name'     => "Oveja",
              'age' => 4,
              'quantity' => 7,
              'classification'  => 'Baja peligrosidad'
            ],
        );
        \DB::table("animales")->insert(
            [
                'id'    => 6,
                'corral_id' => 3,
              'name'     => "Cerdo",
              'age' => 2,
              'quantity' => 8,
              'classification'  => 'Baja peligrosidad'
            ],
      );
    }
}
