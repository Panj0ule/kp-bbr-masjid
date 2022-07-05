<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Informasi_kajian;
use Illuminate\Database\Seeder;
use App\Models\CategoryInformasi_kajian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        /* User::create([
          'name' => 'dummy userlastname',
          'email' => 'userdummy@gmail.com',
          'password' => bcrypt('12345')
        ]); */


        //MANUAL SEEDING
        CategoryInformasi_kajian::create([
          'name' => 'Akidah',
          'slug' => 'akidah'
        ]);

        CategoryInformasi_kajian::create([
          'name' => 'Fiqih',
          'slug' => 'fiqih'
        ]);

        Informasi_kajian::create([
          'title' => 'Judul Pertama',
          'slug' => 'judul-pertama',
          'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, ea! Provident soluta ex fugit laborum nisi illo sed ratione consectetur.',
          'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quidem eum nobis sapiente? Dicta itaque odit incidunt earum corporis totam alias tenetur architecto! Nihil, ad! Vel voluptates culpa ratione sequi! Quisquam libero, dolor consequatur beatae, sunt laborum minima voluptatum quia cupiditate voluptas nam tempore vero laudantium vel reprehenderit, nisi autem? Ipsa, vitae magni. Porro dicta repellendus, consequuntur dolorum omnis at, ea eos fugit mollitia iure, accusantium odit soluta. Cumque obcaecati blanditiis quam in et ea sint provident. Temporibus sed dignissimos veritatis ipsam nostrum? Nostrum dicta deleniti nulla a dolorem aperiam nobis facilis minima, officia sapiente. Excepturi beatae provident eveniet laborum?',
          'category_id' => 1,
          'user_id' => 1
        ]);

        Informasi_kajian::create([
          'title' => 'Judul Kedua',
          'slug' => 'judul-kedua',
          'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore accusantium ullam quo deserunt architecto reprehenderit, illum totam voluptatum molestiae, et consectetur dolorem iure quis dolor. Quisquam excepturi facere veniam ipsum?',
          'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quidem eum nobis sapiente? Dicta itaque odit incidunt earum corporis totam alias tenetur architecto! Nihil, ad! Vel voluptates culpa ratione sequi! Quisquam libero, dolor consequatur beatae, sunt laborum minima voluptatum quia</p><p> cupiditate voluptas nam tempore vero laudantium vel reprehenderit, nisi autem? Ipsa, vitae magni. Porro dicta repellendus, consequuntur dolorum omnis at, ea eos fugit mollitia iure, accusantium odit soluta. Cumque obcaecati blanditiis</p> quam in et ea sint provident. Temporibus sed dignissimos veritatis ipsam nostrum? Nostrum dicta deleniti nulla a dolorem cupiditate voluptas nam tempore vero laudantium vel reprehenderit, nisi autem? Ipsa, vitae magni. Porro dicta repellendus, aperiam nobis facilis minima, officia sapiente. Excepturi beatae provident eveniet laborum?',
          'category_id' => 1,
          'user_id' => 1
        ]);

        Informasi_kajian::create([
          'title' => 'Judul KETIGA',
          'slug' => 'judul-ketiga',
          'excerpt' => 'Lorem ipsum dolor sit, KETIGA, et consectetur dolorem iure quis dolor. Quisquam excepturi facere veniam ipsum?',
          'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quidem eum nobis sapiente? Dicta itaque odit incidunt earum corporis totam alias tenetoluptatum quia</p><p> cupiditate voluptas nam tempore vero laudantium vel reprehenderit, nisi autem? Ipsa, vitae magni. Porro dicta repellendus, consequuntur dolorum omnis at, ea eos fugit mollitia iure, accusantium odit soluta. Cumque obcaecati blanditiis</p> quam in et ea sint provident. Temporibus sed dignissimos veritatis ipsam nostrum? Nostrum dicta degni. Porro dicta repellendus, aperiam nobis facilis minima, officia sapiente. Excepturi beatae provident eveniet laborum?',
          'category_id' => 2,
          'user_id' => 2
        ]);

        //FAKER SEEDING
        Informasi_kajian::factory(20)->create();
    }
}
