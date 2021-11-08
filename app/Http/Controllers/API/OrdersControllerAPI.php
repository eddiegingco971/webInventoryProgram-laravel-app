<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Flash;
use Response;

class OrdersControllerAPI extends Controller {

    public $successStatus = 200;

    public function ordersAPI() {
        $orders = Orders::all();

        if (count($orders) > 0) {
            return response()->json($orders, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no posts in the database'], 404);
        }        
    }
}

?> 