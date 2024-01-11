<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Requests\StorecategoriesRequest;
use App\Http\Requests\UpdatecategoriesRequest;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = categories::all();
        // dd($data);
        return view('dashboard.categories.index',[
            'data'=> $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.categories.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HttpRequest $request)
    {
        //
        $data = categories::create([
            'name'=>$request->nama,
            'slug'=>Str::slug($request->nama),

        ]);
        return redirect('/dashboard/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoriesRequest $request, categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categories $categories)
    {
        //
    }
}
