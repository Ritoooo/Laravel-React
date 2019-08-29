<?php

namespace App\Http\Controllers;

use App\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{

    public function index()
    {
        $wallet = Wallet::firstOrFail();
        return response()->json($wallet->load('transfers'), 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Wallet $wallet)
    {
        //
    }

    public function edit(Wallet $wallet)
    {
        //
    }

    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    public function destroy(Wallet $wallet)
    {
        //
    }
}
