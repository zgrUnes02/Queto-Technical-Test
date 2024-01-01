<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class productController extends Controller
{
    //! Function to return all products :
    public function index() {
        try {
            $products = Product::paginate(5) ;
            return view('product.index' , compact('products')) ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }

    //! Function to create new product :
    public function createNewProduct(Request $request) {
        try {
            //* Check if the product exists in database or not 
            $product = Product::where('product_name' , $request -> product_name) -> first();
            if ( $product ) {
                toastr() -> error('This product already exists !') ;
                return redirect() -> back() ;
            }

            $product = new Product() ;
            $product -> product_name = $request -> product_name ;
            $product -> save() ;

            toastr() -> success('The product has been created with success !') ;
            return redirect() -> back() ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }

    //! Function to update product :
    public function updateProduct(Request $request , $id) {
        try {
            $product = Product::findOrFail($id) ;
            $product -> update([
                "product_name" => $request -> product_name ,
            ]) ;
    
            toastr() -> success('The product has been updated with success !') ;
            return redirect() -> back() ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }

    //! Function to delete product :
    public function deleteProduct($id) {
        try {
            Product::destroy($id) ;

            toastr() -> success('The product has been deleted with success !') ;
            return redirect() -> back() ;
        }
        catch ( Exception $error ) {
            toastr() -> error('Something went wrong !') ;
        }
    }
}
