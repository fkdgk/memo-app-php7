<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <10 ; $i++) { 
            Post::create([
                'user_id' => 1,
                'name' => $i . ' name',
                'body' => $i . 'body',
            ]);
        }
    }
}
