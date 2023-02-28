<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Http\Requests\Provaider\StoreRequest;
use App\Http\Requests\Provaider\UpdateRequest;

class ProviderController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $providers = Provider::get();
        return view('admin.provider.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.provider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        Provider::create($request);
        return redirect()->route('providers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        //
        return view('admin.provider.show', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provider $provider)
    {
        //
         return view('admin.provider.show', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateyRequest $request, Provider $provider)
    {
        //
        Provider::update($request->all());
        return redirect()->route('providers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {
        //
        $provider->delete();
        return redirect()->route('providers.index');
    }
}
