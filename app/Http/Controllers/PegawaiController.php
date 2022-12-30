<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai', compact('data'));
    }

    public function tambahdata()
    {
        return view('tambahdata');
    }

    public function insert(Request $request)
    {
        Pegawai::create($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambah');
    }

    public function editdata($id)
    {
        $data = Pegawai::find($id);

        return view('editdata', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {
        $data = Pegawai::find($id);
        $data->delete();

        return redirect()->route('pegawai')->with('success', 'Data Berhasil Dihapus');
    }
}