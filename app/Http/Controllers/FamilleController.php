<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use App\Http\Requests\StoreFamilleRequest;
use App\Http\Requests\UpdateFamilleRequest;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFamilleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFamilleRequest $request, Famille $famille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $famille)
    {
        //
    }
}
