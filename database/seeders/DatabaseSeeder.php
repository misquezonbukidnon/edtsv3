<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\ActionSeeder;
use Database\Seeders\OfficeSeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\CanvasserSeeder;
use Database\Seeders\ProcessTypeSeeder;
use Database\Seeders\AttachmentListSeeder;
use Database\Seeders\EndorsingOfficeSeeder;
use Database\Seeders\ReceivingOfficeSeeder;
use Database\Seeders\PurchaseDescriptionSeeder;
use Database\Seeders\DocumentProcessStatusSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(OfficeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ActionSeeder::class);
        $this->call(AttachmentListSeeder::class);
        $this->call(CanvasserSeeder::class);
        $this->call(DocumentProcessStatusSeeder::class);
        $this->call(EndorsingOfficeSeeder::class);
        $this->call(ProcessTypeSeeder::class);
        $this->call(PurchaseDescriptionSeeder::class);
        $this->call(ReceivingOfficeSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(SupplierSeeder::class);
    }
}
