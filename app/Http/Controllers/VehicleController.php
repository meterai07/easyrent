<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('product.page', [
            'vehicles' => $vehicles
        ]);
    }

    public function show(Request $request)
    {    
        $vehicle = Vehicle::where('id', $request->id)->first();

        return view('product.detail.page', [
            'vehicle' => $vehicle
        ]);
    }
}
