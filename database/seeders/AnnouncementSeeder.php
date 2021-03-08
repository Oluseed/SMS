<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('amc_srms')
                ->table('announcements')->insert([
                    'teacher_id' => Arr::random([1, 2]),
                    'class' => Str::random(10),
                    'title' => Str::random(10),
                    'story' => Str::random(10),
                ]);
    }
}
