<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewControllers extends Controller
{
    public function datasiswa()
	{
   	// notes: penulisan perintah yang akan dijalankan ditulis di sini
//untuk menuliskan halaman view ketik return view(‘nama.view’) untuk contoh kita akan menampilkan view ‘dashboard’ yang berada di folder ‘/resource/view/dashboard.blade.php’
return view('view');
	}


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
