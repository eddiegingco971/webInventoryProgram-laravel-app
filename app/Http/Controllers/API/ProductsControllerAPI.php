<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductsControllerAPI extends Controller {

    public $successStatus = 200;

    public function productsAPI() {
        $products = Products::all();

        if (count($products) > 0) {
            return response()->json($products, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no posts in the database'], 404);
        }        
    }
}

?> 