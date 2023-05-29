<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Said',
            'last_name' => 'Alhallaq',
            'roles_name' => 'admin',
            'email' => 'saeedaha99@gmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
