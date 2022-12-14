<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::factory()->times(20)->create();

        DB::table('users')->insert([
            'first_name' => 'Kenneth',
            'last_name' => 'Kipchumba',
            'email' => 'kipchumba.kenneth@ymail.com',
            'password' => Hash::make('password')
        ]);
    }
}
