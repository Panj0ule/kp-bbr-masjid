<?php

namespace App\Models;

use App\Models\CategoryInformasi_warga;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Informasi_warga extends Model
{
    use HasFactory;
    //protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    public function category()
    {
      return $this -> belongsTo(CategoryInformasi_warga::class);
    }

    public function user()
    {
      return $this -> belongsTo(User::class);
    }
}
