<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterPenjualController extends Controller
{
    public function index() {
        return view('auth.registerpenjual', [
            'title' => 'Daftar Penjual',
            'active' => 'penjual '
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'store_name' => 'required|string|max:255',
            'store_description' => 'required|string',
            'store_logo' => 'required|max:255',
            'store_icon' => 'required|max:255',
            'store_address' => 'required|max:255',
            'store_phone_number' => 'required|max:255'
        ]);

        $user = auth()->user();

        $profilPenjual = $user->profilPenjual()->create([
            'store_name' => $request->input('store_name'),
            'store_description' => $request->input('store_description'),
            'store_logo' => $request->input('store_logo'),
            'store_icon' => $request->input('store_icon'),
            'store_address' => $request->input('store_address'),
            'store_phone_number' => $request->input('store_phone_number')
        ]);

        // dd($profilPenjual);
        // return redirect()->route('some.route.name')->with('success', 'Store registration successful!');
        return redirect('/dashboard');
    }

}