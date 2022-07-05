<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryInformasi_kajian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function posts()
    {
      return $this->hasMany(Informasi_kajian::class, 'category_id');
    }
}
