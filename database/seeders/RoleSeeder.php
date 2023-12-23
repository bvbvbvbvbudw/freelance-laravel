<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $freelancer = new Role;
        $freelancer -> name = 'Freelancer';
        $freelancer -> description = 'freelancers looking for projects';
        $freelancer ->save();

        $client = new Role;
        $client -> name = 'Client';
        $client -> description = 'Clients postings jobs for freelancer';
        $client -> save();
    }
}
