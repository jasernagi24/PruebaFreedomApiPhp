<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class CorralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                  \DB::table("corrales")->insert(
                        [
                                'id'    => 1,
                              'name'     => "Corral 1",
                              'capacity'  => 20,
                        ],
                    );
                    
                  \DB::table("corrales")->insert(
                        [
                            'id'    => 2,
                          'name'     => "Corral 2",
                          'capacity'  => 15,
                        ],
                    );
                  \DB::table("corrales")->insert(
                        [
                            'id'    => 3,
                          'name'     => "Corral 3",
                          'capacity'  => 30,
                        ],
                    );
    }
}
