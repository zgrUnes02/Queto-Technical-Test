<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory ;
    
    protected $fillable = ["product_name"] ;

    //! Has-Many RelationShip :
    public function food_products() {
        return $this -> hasMany(FoodProduct::class);
    }
}
