<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'level'=>'Admin',
               'password'=> bcrypt('admin'),
            ],
            [
                'username' => 'guru',
                'level'=>'Guru',
               'password'=> bcrypt('guru'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
