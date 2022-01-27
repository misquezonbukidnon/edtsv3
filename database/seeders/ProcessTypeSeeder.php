<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('process_types')->insert([
            [
                'name' => 'Purchase Request',
                'abbr' => 'PR'
            ],
            [
                'name' => 'Purchase Order',
                'abbr' => 'PO'
            ],
            [
                'name' => 'Voucher',
                'abbr' => 'Voucher'
            ]
        ]);
    }
}
