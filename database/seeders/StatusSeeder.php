<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            [
                'name' => 'None'
            ],
            [
                'name' => 'In Progress'
            ],
            [
                'name' => 'Cancelled'
            ],
            [
                'name' => 'Complete'
            ]
        ]);
    }
}
