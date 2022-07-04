<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryInformasi_warga extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function posts()
    {
      return $this->hasMany(Informasi_warga::class, 'category_id');
    }
}
