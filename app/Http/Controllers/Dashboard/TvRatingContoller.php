<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\TvRatingDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TvRatingContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TvRatingDataTable $dataTable)
    {
        return $dataTable->render('pages.genre.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
