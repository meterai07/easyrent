<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use App\Models\Tenant;
use App\Models\Vehicle;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Transactional;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTransactionalRequest;
use App\Http\Requests\UpdateTransactionalRequest;
use \Midtrans\Snap;
use Midtrans\Transaction;

class TransactionalController extends Controller
{
    public function show(Request $request)
    {
        $vehicles = Vehicle::where('id', $request->id)->first();
        $categories = Category::where('id', $vehicles->category_id)->first();

        return view("transaction.page", [
            'vehicles' => $vehicles,
            'categories' => $categories
        ]);
    }

    // public function invoice(StoreTransactionalRequest $request)
    // {
    //     $validatedData = $request->validated();

    //     // logic buat pembayaran total harga disini
    //     $validatedData['totalPayment'] = $validatedData['total_payment'];

    //     return view('invoice.page', [
    //         'validatedData' => $validatedData,
    //     ]);
    // }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $transactional = Transactional::findOrFail($request->order_id);
                $transactional->payment_status = 'SUCCESS';
                $transactional->save();
            }
        }
    }

    public function transaction(StoreTransactionalRequest $request)
    {
        $validatedData = $request->validated();

        DB::transaction(function () use ($validatedData) {
            // logic buat pembayaran total harga disini
            $totalPayment = $validatedData['total_payment'] * 1000;

            $transaction = new Transactional([
                'tenant_id' => $validatedData['tenant_id'],
                'vehicle_id' => $validatedData['vehicle_id'],
                'name' => $validatedData['name'],
                'phone_number' => $validatedData['phone_number'],
                'address' => $validatedData['address'],
                'city' => $validatedData['city'],
                'pick_up_date' => $validatedData['pick_up_date'],
                'pick_up_location' => $validatedData['pick_up_location'],
                'pick_up_time' => $validatedData['pick_up_time'],
                'drop_off_date' => $validatedData['drop_off_date'],
                'drop_off_location' => $validatedData['drop_off_location'],
                'drop_off_time' => $validatedData['drop_off_time'],
                'total_payment' => $totalPayment,
                'payment_status' => "PROCESS",
                'payment_method' => $validatedData['payment_method']
            ]);

            $transaction->save();

            Config::$serverKey = config('midtrans.server_key');
            Config::$isProduction = false;
            Config::$isSanitized = true;
            Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $transaction->id,
                    'gross_amount' => $transaction->total_payment,
                ),
                'customer_details' => array(
                    'name' => $transaction->name,
                    // 'email' => $user->email,
                    'phone' => $transaction->phone_number,
                ),
            );

            $snapToken = Snap::getSnapToken($params);
            return view('invoice.page', compact('snapToken', 'transaction'));
        });
    }
}
