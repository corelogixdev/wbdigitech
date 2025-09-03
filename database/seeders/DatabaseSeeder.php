<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Team;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password123'), // change to a secure password
            'is_admin' => true,
        ]);


        Team::truncate(); // clear existing records for testing

        $teams = [
            [
                'name'       => 'Siddharth Menon',
                'speciality' => 'Client Co-Ordinator',
                'image'      => 'teams/client-co-ordinator.jpg',
            ],
            [
                'name'       => 'Omar Tarek',
                'speciality' => 'Data Analyst',
                'image'      => 'teams/data-analyst.png',
            ],
            [
                'name'       => 'Diya Malhotra',
                'speciality' => 'Google Ad Manager',
                'image'      => 'teams/google-ad-manager.png',
            ],
            [
                'name'       => 'Ananya Kapoor',
                'speciality' => 'Graphic & Art Designer',
                'image'      => 'teams/graphic-designer.png',
            ],
            [
                'name'       => 'Yuvraj Choudhary',
                'speciality' => 'SEO Specialist',
                'image'      => 'teams/seo-specialist.png',
            ],
            [
                'name'       => 'Neha Singh',
                'speciality' => 'Social Media Specialist',
                'image'      => 'teams/social-media-specialist.png',
            ],
            [
                'name'       => 'Naomi Collins',
                'speciality' => 'Web Developer',
                'image'      => 'teams/web-developer.png',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }

    }
}
