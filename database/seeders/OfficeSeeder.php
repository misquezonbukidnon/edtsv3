<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offices')->insert([
            [
                'name' => 'Personal Staff',
                'abbr' => 'MMO-PS'
            ],
            [
                'name' => 'Management Information System Division',
                'abbr' => 'MMO-MIS'
            ],
            [
                'name' => 'Municipal Disaster Risk Reduction and Management Office',
                'abbr' => 'MDRRMO'
            ],
            [
                'name' => 'Public Affairs, Information and Assistance Division',
                'abbr' => 'MMO-PAIAD'
            ],
            [
                'name' => 'Bids and Award Committee',
                'abbr' => 'MMO-BAC'
            ],
            [
                'name' => 'Purchasing Office',
                'abbr' => 'MMO-PO'
            ],
            [
                'name' => 'Livelihood Division',
                'abbr' => 'MMO-LD'
            ],
            [
                'name' => 'Permits and Licenses Division',
                'abbr' => 'MMO-BPLO'
            ],
            [
                'name' => 'General Services Office',
                'abbr' => 'MMO-GSO'
            ],
            [
                'name' => 'Population Development Division',
                'abbr' => 'MMO-PopDev'
            ],
            [
                'name' => 'Nutrition Division',
                'abbr' => 'MMO-ND'
            ],
            [
                'name' => 'Municipal Enterprise Management Office',
                'abbr' => 'MEMO'
            ],
            [
                'name' => 'Barangay Affairs Division',
                'abbr' => 'MMO-BA'
            ],
            [
                'name' => 'Human Resource Management Office',
                'abbr' => 'MMO-HRMO'
            ],
            [
                'name' => 'Civil Security Unit',
                'abbr' => 'MMO-CSU'
            ],
            [
                'name' => 'Office of the Sangguniang Bayan',
                'abbr' => 'SBO'
            ],
            [
                'name' => 'Municipal Planning and Development Office',
                'abbr' => 'MPDO'
            ],
            [
                'name' => 'Municipal Budget Office',
                'abbr' => 'MBO'
            ],
            [
                'name' => 'Municipal Accounting Office',
                'abbr' => 'MACCO'
            ],
            [
                'name' => 'Municipal Treasurer Office',
                'abbr' => 'MTO'
            ],
            [
                'name' => 'Municipal Engineer Office',
                'abbr' => 'MEO'
            ],
            [
                'name' => 'Municipal Assessor Office',
                'abbr' => 'MAO'
            ],
            [
                'name' => 'Municipal Health Office',
                'abbr' => 'MHO'
            ],
            [
                'name' => "Municipal Mayor's Office",
                'abbr' => 'MMO'
            ],
            [
                'name' => 'Municipal Agriculture Office',
                'abbr' => 'DA'
            ],
            [
                'name' => 'Municipal Civil Registrar Office',
                'abbr' => 'MCRO'
            ],
            [
                'name' => 'Municipal Social Welfare and Development Office',
                'abbr' => 'MSWD'
            ],
            [
                'name' => 'Municipal Environment and Natural Resources Office',
                'abbr' => 'MENRO'
            ],
            [
                'name' => 'Commission On Audit',
                'abbr' => 'COA'
            ],
            [
                'name' => 'Commission On Elections',
                'abbr' => 'COMELEC'
            ],
            [
                'name' => 'Philippine National Police',
                'abbr' => 'PNP'
            ],
            [
                'name' => 'Bureau of Fire Protection',
                'abbr' => 'BFP'
            ],
            [
                'name' => 'Department of Interior Local Government',
                'abbr' => 'DILG'
            ],
            [
                'name' => 'Local School Board',
                'abbr' => 'LSB'
            ],
            [
                'name' => 'Supplier',
                'abbr' => 'SPLR'
            ]
        ]);
    }
}
