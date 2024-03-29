<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Category;

class VehicleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('name')) {
            $vehicles = Vehicle::where('name', 'like', '%' . $request->name . '%')->get();
        } else {
            $vehicles = Vehicle::all();
        }

        if ($request->has('category')) {
            $categoriesRequest = Category::where('name', $request->category)->first();
        } 
        $categories = Category::all();

        return view('product.page', [
            'vehicles' => $vehicles,
            'categoriesRequest' => $categoriesRequest ?? null,
            'categories' => $categories
        ]);
    }

    public function show(Request $request)
    {    
        $vehicle = Vehicle::where('id', $request->id)->first();
        $type = Category::where('id', $vehicle->category_id)->first();
        $vehicles = Vehicle::all();
        $categories = Category::all();

        return view('product.detail.page', [
            'vehicle' => $vehicle,
            'type' => $type,
            'vehicles' => $vehicles,
            'categories' => $categories
        ]);
    }
}
