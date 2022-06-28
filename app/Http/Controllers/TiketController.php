<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Tiket;
use App\Models\Bioskop;

class TiketController extends Controller
{
    public function index()
    {
        $data['tiket'] = Tiket::orderBy('id','asc')->paginate(5);

        return view('tiket.index', $data);
    }

    public function getData(Request $request)
    {
        $res = Tiket::select("*")
                // ->where("alamat_siswa","LIKE","%{$request->term}%")
                ->get();
    
        return response()->json($res);
    }

    public function create()
    {
        $bioskops = Bioskop::get();
        $response = Http::get('https://api-kelompok-6.herokuapp.com/api/film');
        $film = $response->json('data.data');
        
        return view('tiket.create', compact('film','bioskops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bioskop' => 'required',
            'telepon_bioskop' => 'required',
            'alamat_bioskop' => 'required',
            'judul_film' => 'required',
            'harga_film' => 'required',
        ]);
        $tiket = new Tiket;
        $tiket->nama_bioskop = $request->nama_bioskop;
        $tiket->telepon_bioskop = $request->telepon_bioskop;
        $tiket->alamat_bioskop = $request->alamat_bioskop;
        $tiket->judul_film = $request->judul_film;
        $tiket->harga_film = $request->harga_film;
        $tiket->save();
        return redirect()->route('tiket.index')->with('success','Tiket has been created successfully.');
    }

    public function show(Tiket $tiket)
    {
        return view('tiket.show',compact('tiket'));
    }

    public function edit(Tiket $tiket)
    {
        return view('tiket.edit',compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bioskop' => 'required',
            'telepon_bioskop' => 'required',
            'alamat_bioskop' => 'required',
            'judul_film' => 'required',
            'harga_film' => 'required',
        ]);
        $tiket = Tiket::find($id);
        $tiket->nama_bioskop = $request->nama_bioskop;
        $tiket->telepon_bioskop = $request->telepon_bioskop;
        $tiket->alamat_bioskop = $request->alamat_bioskop;
        $tiket->judul_film = $request->judul_film;
        $tiket->harga_film = $request->harga_film;
        $tiket->save();
        return redirect()->route('tiket.index')->with('success','Tiket Has Been updated successfully');
    }

    public function destroy(Tiket $tiket)
    {
        $tiket->delete();
        return redirect()->route('tiket.index')->with('success','Tiket has been deleted successfully');
    }
}
