<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            

       User::create([
           'name' => 'Ray pratidin',
           'username'=>'raypratidina',
           'email' => 'raypz@gmail.com',
           'password' => bcrypt('12345')
       ]);
   //     User::create([
   //         "name" => 'agung sept',
   //         'email' => 'agungSept@gmail.com',
   //         'password' => bcrypt('12345')
   //     ]);

        User::factory(3)->create();

        category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

//         Post::create([
//             'title' =>'judul pertama',
//             'slug' => 'judul-pertama',
//             'excerpt'=> 'fugiat itaque sint voluptatem id expedita mollitia pariatur.',
//             'body' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur, velit numquam dignissimos placeat aperiam repellendus explicabo. Ipsam, quisquam sit magni dolor ab nobis repellendus repellat non, distinctio itaque illo suscipit labore quam voluptas? Possimus et cupiditate sit optio consectetur. Molestiae minima et velit eum labore! Veniam nihil obcaecati velit illo odio reiciendis dolores pariatur quo laudantium recusandae inventore architecto vero aliquid expedita, autem cumque sint ea fugiat porro molestiae perferendis dolorem exercitationem dignissimos.',

//             'category_id' => 1,
//             'user_id' =>1
//         ]);
//         Post::create([
//             'title' =>'judul ke dua',
//             'slug' => 'judul-ke-dua',
//             'excerpt'=> 'fugiat itaque sint voluptatem id expedita mollitia pariatur.',
//             'body' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur, velit numquam dignissimos placeat aperiam repellendus explicabo. Ipsam, quisquam sit magni dolor ab nobis repellendus repellat non, distinctio itaque illo suscipit labore quam voluptas? Possimus et cupiditate sit optio consectetur. Molestiae minima et velit eum labore! Veniam nihil obcaecati velit illo odio reiciendis dolores pariatur quo laudantium recusandae inventore architecto vero aliquid expedita, autem cumque sint ea fugiat porro molestiae perferendis dolorem exercitationem dignissimos.',

//             'category_id' => 1,
//             'user_id' =>1
//         ]);
//         Post::create([
//             'title' =>'judul ke tiga',
//             'slug' => 'judul-ke-tiga',
//             'excerpt'=> 'fugiat itaque sint voluptatem id expedita mollitia pariatur.',
//             'body' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur, velit numquam dignissimos placeat aperiam repellendus explicabo. Ipsam, quisquam sit magni dolor ab nobis repellendus repellat non, distinctio itaque illo suscipit labore quam voluptas? Possimus et cupiditate sit optio consectetur. Molestiae minima et velit eum labore! Veniam nihil obcaecati velit illo odio reiciendis dolores pariatur quo laudantium recusandae inventore architecto vero aliquid expedita, autem cumque sint ea fugiat porro molestiae perferendis dolorem exercitationem dignissimos.',

//             'category_id' => 2,
//             'user_id' =>1
//         ]);
//         Post::create([
//             'title' =>'judul ke empat',
//             'slug' => 'judul-ke-empat',
//             'excerpt'=> 'fugiat itaque sint voluptatem id expedita mollitia pariatur.',
//             'body' => 'fugiat itaque sint voluptatem id expedita mollitia pariatur, velit numquam dignissimos placeat aperiam repellendus explicabo. Ipsam, quisquam sit magni dolor ab nobis repellendus repellat non, distinctio itaque illo suscipit labore quam voluptas? Possimus et cupiditate sit optio consectetur. Molestiae minima et velit eum labore! Veniam nihil obcaecati velit illo odio reiciendis dolores pariatur quo laudantium recusandae inventore architecto vero aliquid expedita, autem cumque sint ea fugiat porro molestiae perferendis dolorem exercitationem dignissimos.',

//             'category_id' => 2,
//             'user_id' =>2
//         ]);
//     }
 }
}
