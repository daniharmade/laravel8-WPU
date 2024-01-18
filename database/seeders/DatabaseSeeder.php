<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "Dani Harmade",
            'username' => "daniharmade",
            'email' => "harmadedani@gmail.com",
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => "Sandhika Galih",
        //     'email' => "sandhikagalih@gmail.com",
        //     'password' => bcrypt('12345')
        // ]);

        #factory faker
        User::factory(3)->create();
        Post::factory(20)->create();

        Category::create([
            'name' => "Web Programming",
            'slug' => "web-programming"
        ]);

        Category::create([
            'name' => "Web Design",
            'slug' => "web-design"
        ]);

        Category::create([
            'name' => "Personal",
            'slug' => "personal"
        ]);

        // Post::create([
        //     'title' => "Judul Pertama",
        //     'slug' => "judul-pertama",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Kedua",
        //     'slug' => "judul-kedua",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Ketiga",
        //     'slug' => "judul-ketiga",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        //     'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.",
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);


    }
}
