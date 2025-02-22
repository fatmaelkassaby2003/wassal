<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        $restaurant = Restaurant::find($request->id);
        if (!$restaurant) {
            return response()->json(['message' => 'Restaurant not found'], 404);
        }
    
        $foods = $restaurant->foods; 
    
        return response()->json($foods);
    }
}
