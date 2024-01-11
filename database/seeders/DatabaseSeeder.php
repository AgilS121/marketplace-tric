<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    //Membuat Faker factory user
                
    
        User::create([
            'name' => 'M. Syafri Abidin',
            'username' => 'syafriabidin',
            'email' => 'syafri.abidin@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'M. Janur Abidin',
        //     'email' => 'janur.abidin@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();
         
    
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
    
        Post::factory(20)->create();

        Barang::factory(5)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consectetur inventore non expedita necessitatibus dolorem itaque odio error suscipit, tempore deserunt eos obcaecati optio excepturi velit recusandae quia. Dolor, harum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Molestias, consequuntur porro neque perferendis, fugit nulla ipsam voluptas magni modi non maiores sapiente reiciendis, quo explicabo iste magnam illo ipsum quod laudantium odio officia quidem delectus culpa a? Facilis quaerat, ducimus doloribus consequuntur sunt inventore nulla minima unde architecto veniam rerum?</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum optio magnam distinctio blanditiis voluptatum nostrum harum voluptatem nihil praesentium, ratione corporis ut molestiae maiores illo. Dolor laudantium est ipsa!</p>',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consectetur inventore non expedita necessitatibus dolorem itaque odio error suscipit, tempore deserunt eos obcaecati optio excepturi velit recusandae quia. Dolor, harum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Molestias, consequuntur porro neque perferendis, fugit nulla ipsam voluptas magni modi non maiores sapiente reiciendis, quo explicabo iste magnam illo ipsum quod laudantium odio officia quidem delectus culpa a? Facilis quaerat, ducimus doloribus consequuntur sunt inventore nulla minima unde architecto veniam rerum?</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum optio magnam distinctio blanditiis voluptatum nostrum harum voluptatem nihil praesentium, ratione corporis ut molestiae maiores illo. Dolor laudantium est ipsa!</p>',
        //     'category_id' => 1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consectetur inventore non expedita necessitatibus dolorem itaque odio error suscipit, tempore deserunt eos obcaecati optio excepturi velit recusandae quia. Dolor, harum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Molestias, consequuntur porro neque perferendis, fugit nulla ipsam voluptas magni modi non maiores sapiente reiciendis, quo explicabo iste magnam illo ipsum quod laudantium odio officia quidem delectus culpa a? Facilis quaerat, ducimus doloribus consequuntur sunt inventore nulla minima unde architecto veniam rerum?</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum optio magnam distinctio blanditiis voluptatum nostrum harum voluptatem nihil praesentium, ratione corporis ut molestiae maiores illo. Dolor laudantium est ipsa!</p>',
        //     'category_id' => 2,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto consectetur inventore non expedita necessitatibus dolorem itaque odio error suscipit, tempore deserunt eos obcaecati optio excepturi velit recusandae quia. Dolor, harum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Molestias, consequuntur porro neque perferendis, fugit nulla ipsam voluptas magni modi non maiores sapiente reiciendis, quo explicabo iste magnam illo ipsum quod laudantium odio officia quidem delectus culpa a? Facilis quaerat, ducimus doloribus consequuntur sunt inventore nulla minima unde architecto veniam rerum?</p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum optio magnam distinctio blanditiis voluptatum nostrum harum voluptatem nihil praesentium, ratione corporis ut molestiae maiores illo. Dolor laudantium est ipsa!</p>',
        //     'category_id' => 2,
        //     'user_id'=>2
        // ]);
    }

}
