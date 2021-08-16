<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Imports\ObjekPajakImport;

class ObjekPajakImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new ObjekPajakImport)->import(base_path('database/seeders/objek_pajak.csv'));
    }
}
