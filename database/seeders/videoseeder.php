<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class videoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::factory()->create([
            'name' => 'best video'
        ]);
         Video::factory()->count(10)->create();
    }
}
