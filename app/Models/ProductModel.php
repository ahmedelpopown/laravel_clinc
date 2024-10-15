<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'title',
        'price',
        'description',
    ];

//     public function category(){
//         return $this->belongsTo(CategoryModel::class);
//     }
// public function orders(){
//     return $this->belongsToMany(order::class);    

// }

 }
