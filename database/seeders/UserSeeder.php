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
        // create user super admin
        $user = User::create([
            'name'          => 'Farhan Riuzaki',
            'username'      => 'superadmin',
            'email'         => 'admin@email.com',
            'status'        => '1', // status active
            'password'      => bcrypt('P@ssw0rd')
        ]);

        // sync user Farhan Riuzaki to role super admin
        $user->assignRole('super-admin');

    }
}
