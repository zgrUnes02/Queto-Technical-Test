<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodProduct extends Model
{
    use HasFactory ;

    protected $fillable = ['product_id' , 'food_product_name' , 'quantity' , 'expiration_date'] ;

    //! Belongs-to RelationShip :
    public function product() {
        return $this -> belongsTo(Product::class) ;
    }
}
