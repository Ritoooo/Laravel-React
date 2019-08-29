<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\Wallet;
use Illuminate\Http\Request;

class TransferController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

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
        //
    }

    public function edit(Transfer $transfer)
    {
        //
    }

    public function update(Request $request, Transfer $transfer)
    {
        //
    }

    public function destroy(Transfer $transfer)
    {
        //
    }
}
