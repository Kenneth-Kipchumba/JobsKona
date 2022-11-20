<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'phone_1' => '0712345678',
            'phone_2'=> '0712345678',
            'another_email' => '',
            'website' => 'www.mywebsite.com',
            'linked_in' => 'linkedin.com',
            'twitter' => 'twitter.com',
            'languages_spoken'  => 'English,Kiswahili',
            'languages_written' => 'English,Kiswahili',
            'biography' => 'A highly motivated individual bla bla bla',
            'academic_achievement_1' => 'KCPE CERTIFICATE. 380 Marks',
            'academic_achievement_2' => 'KCSE CERTIFICATE. B+',
            'academic_achievement_3' => 'Undergraduate Bsc. Information Technology',
            'academic_achievement_4' => '',
            'academic_achievement_5' => '',
            'professional_achievement_1' => 'Certificate in Leadership',
            'professional_achievement_2' => 'Certified Public Secretaries CPSK',
            'professional_achievement_3' => 'Certificate in General Affairs (Jack of all Trades)',
            'professional_achievement_4' => '',
            'professional_achievement_5' => '',


        ]);
    }
}
