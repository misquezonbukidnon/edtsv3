<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentProcessStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('document_process_statuses')->insert([
            [
                'name' => 'Due'
            ],
            [
                'name' => 'Overdue'
            ]
        ]);
    }
}
