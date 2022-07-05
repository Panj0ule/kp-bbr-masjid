<?php

namespace App\Models;

use App\Models\CategoryInformasi_kajian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Informasi_kajian extends Model
{
    use HasFactory;
    //protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    public function scopeFilter($query, array $filters)
    {
      $query->when($filters['search'] ?? false, function ($query, $search) {
        return $query->where('title', 'like', '%'. $search. '%')
              ->orWhere('body', 'like', '%'. $search. '%');
      });
      $query->when($filters['category'] ?? false, function ($query, $category) {
        return $query->whereHas('category', function($query) use ($category){
          $query->where('slug', $category);
        });
      });
    }

    public function category()
    {
      return $this -> belongsTo(CategoryInformasi_kajian::class);
    }

    public function user()
    {
      return $this -> belongsTo(User::class);
    }
}