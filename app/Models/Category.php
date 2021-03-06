<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
    ];

    public $timestamps = false;

    public function products() {
        return $this->hasMany(Product::class, 'category_id');
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        Category::deleting(function ($category){
            $category->products()->delete();
        });
    }
}
