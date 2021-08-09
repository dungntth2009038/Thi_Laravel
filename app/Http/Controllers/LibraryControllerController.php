<?php

namespace App\Http\Controllers;

use App\Models\LibraryController;
use Database\Seeders\LibrarySeeder;
use Illuminate\Http\Request;

class LibraryControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = new LibraryController();
        $list->fill($list->all());
        $list->save();
        return redirect('list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LibraryController  $libraryController
     * @return \Illuminate\Http\Response
     */
    public function show(LibraryController $libraryController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LibraryController  $libraryController
     * @return \Illuminate\Http\Response
     */
    public function edit(LibraryController $libraryController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LibraryController  $libraryController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LibraryController $libraryController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LibraryController  $libraryController
     * @return \Illuminate\Http\Response
     */
    public function destroy(LibraryController $libraryController)
    {
        //
    }
}
