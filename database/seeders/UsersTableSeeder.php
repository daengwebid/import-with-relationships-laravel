<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ObjekPajak;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        ObjekPajak::truncate();
        User::factory()
            ->has(ObjekPajak::factory()->count(10), 'objek_pajak')
            ->count(150)
            ->create();
    }
}
