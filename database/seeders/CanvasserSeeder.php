<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CanvasserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('canvassers')->insert([
            [
                'name' => 'Joel Salonoy'
            ],
            [
                'name' => 'Melvin Abaquita'
            ],
            [
                'name' => 'Marilou Elemento'
            ]
        ]);
    }
}
