<?php

namespace App\Http\Controllers;

use App\Models\FoodProduct;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class FoodProductController extends Controller
{
    //! Function to list food products :
    public function index() {
        try {
            $products_food = FoodProduct::paginate(5) ;
            $products = Product::get() ;
            return view('food_product.index' , compact('products_food' , 'products')) ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }

    //! Function to create new food product :
    public function createNewFoodProduct(Request $request) {
        try {
            $food_product = new FoodProduct() ;
            $food_product -> food_product_name = $request -> food_product_name ;
            $food_product -> quantity = $request -> quantity ;
            $food_product -> product_id = $request -> product_id ;
            $food_product -> expiration_date = $request -> expiration_date ;
            $food_product -> save() ;

            toastr() -> success('The food product has been created with success !') ;
            return redirect() -> back() ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }

    //! Function to update food product :
    public function updateFoodProduct(Request $request , $id) {
        try {
            $product = FoodProduct::findOrFail($id) ;
            $product -> update([
                'food_product_name' => $request -> food_product_name ,
                'quantity' => $request -> quantity ,
                'expiration_date' => $request -> expiration_date ,
                'product_id' => $request -> product_id ,
            ]) ;
            
            toastr() -> success('The food product has been updated with success !') ;
            return redirect() -> back() ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }

    //! Function to delete food product :
    public function deleteFoodProduct($id) {
        try {
            FoodProduct::destroy($id) ;

            toastr() -> success('The food product has been deleted with success !') ;
            return redirect() -> back() ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }

    //! Function to display all food product belong to specific product :
    public function show($id) {
        try {
            $product = Product::find($id) ;
            $products = Product::find($id) -> food_products ;
            return view('product.show' , compact('products' , 'product')) ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }    
}
