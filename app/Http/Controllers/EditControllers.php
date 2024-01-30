<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class EditControllers extends Controller
{
        
    public function deleteSiswa($id){
        $delete = Siswa::where('id', $id)->delete();

        if($delete){
        return back()->with('success', 'Data successfully deleted');
        }
         else {
        return back()->with('error', 'Error: Data could not be deleted');
        } } 

    public function editSiswa($id)
    {
    $data =  Siswa::where('id', $id)->first();
    return view('edit', compact('data'));
    }

    public function updateSiswa(Request $request){
        $update = Siswa::where('id', $request->id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'no_handphone' => $request->no_handphone,
            'hobi' => $request->hobi,

        ]);

        if($update){
            return back()->with('success', 'Data successfully updated');
        } else {
            return back()->with('error', 'Please check your input and try again.');
        }
    }

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
