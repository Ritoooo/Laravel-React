<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\Wallet;
use Illuminate\Http\Request;

class TransferController extends Controller
{

    public function store(Request $request)
    {
        $wallet = Wallet::find($request->wallet_id);
        $wallet->money = $wallet->money + $request->amount;
        $wallet->update();

        $transfer = new Transfer();
        $transfer->description = $request->description;
        $transfer->amount = $request->amount;
        $transfer->wallet_id = $request->wallet_id;
        $transfer->save();

        return response()->json($transfer, 201);
    }

    public function show(Transfer $transfer)
    {
        return response()->json($transfer, 200);
    }

    public function update(Request $request, Transfer $transfer)
    {
        $data = $request->all();
        $transfer->update($data);

        return response()->json($transfer, 200);
    }

    public function destroy(Transfer $transfer)
    {
        $wallet = $transfer->wallet;
        $wallet->money = $wallet->money - $transfer->amount;
        $wallet->save();
        $transfer->delete();

        return response()->json($wallet, 200);
    }
}
