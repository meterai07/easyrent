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
        return view('product.page');
    }

    public function show(Request $request)
    {
        return view('product.detail.page', [
            'vehicle_contoh' => $request->id 
        ]);
    }
}
