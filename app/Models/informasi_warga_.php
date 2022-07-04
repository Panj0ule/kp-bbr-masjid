<?php

namespace App\Models;

class informasi_warga
{
  private static $dummy_blog = [
    [
      "title" => "Judul Post Pertama",
      "author" => "Admin satu",
      "slug" => "judul-post-pertama",
      "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque beatae nisi nulla, veritatis corporis quis vel quibusdam. Expedita, laboriosam officia commodi quaerat at impedit facere laborum similique non alias consectetur explicabo maxime dolorum sapiente harum reiciendis quod laudantium ex libero, praesentium minima voluptatem dolores. Incidunt non praesentium eligendi voluptates voluptas eos repellat eveniet nobis accusantium! Rerum cumque consequuntur similique quaerat minima nobis possimus, odit placeat quod commodi, expedita quas deserunt cupiditate consectetur voluptatibus architecto velit quisquam laborum quo hic assumenda."
    ],
    [
      "title" => "Judul Post kedua",
      "author" => "Admin kedua",
      "slug" => "judul-post-kedua",
      "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis saepe velit quo dolor laboriosam culpa eos quod, quibusdam quas. Aut quo impedit cumque neque tempora quod, eum ullam aperiam cupiditate fugiat officia temporibus modi delectus recusandae repellat! Suscipit quisquam perferendis, ipsum asperiores odit fugit sit hic amet animi laborum similique doloremque? Dolores reiciendis iure quasi dicta deleniti, explicabo harum maiores autem sed sequi quod natus dolor? Ut, quibusdam? Porro laborum minima aliquid, asperiores voluptatum ipsum magni nemo cumque repellendus ab distinctio odit soluta illum enim nulla facilis assumenda est illo a molestiae doloremque. Dolor omnis autem, enim perspiciatis quis unde?"
    ],

  ];

  public static function all(){
    return collect(self::$dummy_blog);
  }

  public static function find($slug){
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
  }
}
