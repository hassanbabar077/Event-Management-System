<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Organizer;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Organizer::create([
            'name' => 'Organizer',
            'email' => 'organizer@example.com',
            'password' => Hash::make('1234567'),
        ]);
    }
}
