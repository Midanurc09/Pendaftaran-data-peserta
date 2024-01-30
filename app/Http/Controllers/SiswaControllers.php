<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaControllers extends Controller
{

    public function dataSiswa()
    {
        $datas = Siswa::get();
        Return view('siswa', compact('datas'));
    }

    public function storeSiswa(Request $request)
    {
$store = Siswa::create([
    'name' => $request->name,
    'nis' => $request->nis,
    'kelas' => $request->kelas,
    'alamat' =>$request->alamat,
    'no_handphone' =>$request->no_handphone,
    'hobi' =>$request->hobi,

            
]);

if ($store) {
    return back()->with('success', 'Data successfully inputted');
}

else {
return back()->with('error', 'Error: Data could not be inputted');
}

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
