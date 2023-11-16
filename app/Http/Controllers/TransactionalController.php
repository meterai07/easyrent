<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use App\Models\Tenant;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Transactional;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTransactionalRequest;
use App\Http\Requests\UpdateTransactionalRequest;

class TransactionalController extends Controller
{
    public function index()
    {

    }

    public function transaction(StoreTransactionalRequest $request)
    {
        $validated = $request->validated();

        $user = auth()->user();
        $tenantID = Tenant::where('user_id', $user->id)->first()->id;

        DB::transaction(function () use ($validated, $user, $tenantID) {
            $transactional = Transactional::create([
                'tenant_id' => $tenantID,
                'vehicle_id' => $validated['vehicle_id'],
                'rent_date' => $validated['rent_date'],
                'rent_period' => $validated['rent_period'],
                'total_payment' => $validated['total_payment'],
            ]);

            Config::$serverKey = config('midtrans.server_key');
            Config::$isProduction = false;
            Config::$isSanitized = true;
            Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $transactional->id,
                    'gross_amount' => $transactional->total_payment,
                ),
                'customer_details' => array(
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => $user->phone_number,
                ),
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('transactional.transaction', compact('snapToken', 'transactional'));
        });
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
    
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $transactional = Transactional::findOrFail($request->order_id);
                $transactional->payment_status = 'SUCCESS';
                $transactional->save();
            }
        }
    }
}
