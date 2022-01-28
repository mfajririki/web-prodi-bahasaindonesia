<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Pendidikan Bahasa Indonesia',
            'email' => 'adminpbi@binadarma.ac.id',
            'password' => bcrypt('adminpbiubd')
        ]);
    }
}
