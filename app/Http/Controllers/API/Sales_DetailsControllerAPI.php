<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Sales_Details;
use Illuminate\Http\Request;
use Flash;
use Response;

class Sales_DetailsControllerAPI extends Controller {

    public $successStatus = 200;

    public function salesAPI() {
        $salesDetails = Sales_Details::all();

        if (count($salesDetails) > 0) {
            return response()->json($salesDetails, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no posts in the database'], 404);
        }        
    }
}

?> 