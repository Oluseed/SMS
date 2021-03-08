<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\AnnouncementSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AnnouncementSeeder::class
        ]);
    }
}
