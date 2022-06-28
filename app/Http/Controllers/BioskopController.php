<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Bioskop;

class BioskopController extends Controller
{
    public function index()
    {
        $data['bioskop'] = Bioskop::orderBy('id','asc')->paginate(5);
        return view('bioskop.index', $data);
    }

    public function getData(Request $request)
    {
        $res = Bioskop::select("*")
                // ->where("alamat_siswa","LIKE","%{$request->term}%")
                ->get();
    
        return response()->json($res);
    }

    public function create()
    {
        $response = Http::get('https://api-kelompok-6.herokuapp.com/api/film');
        $film = $response->json('data.data');
        $num = 0;
        
        return view('bioskop.create', compact('film','num'));
        // return view('bioskop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bioskop' => 'required',
            'telepon_bioskop' => 'required',
            'alamat_bioskop' => 'required',
            // 'judul_film' => 'required',
            // 'rating_film' => 'required',
            // 'genre_film' => 'required',
            // 'sutradara_film' => 'required',
            // 'tahun_film' => 'required',
        ]);
        $bioskop = new Bioskop;
        $bioskop->nama_bioskop = $request->nama_bioskop;
        $bioskop->telepon_bioskop = $request->telepon_bioskop;
        $bioskop->alamat_bioskop = $request->alamat_bioskop;
        // $bioskop->judul_film = $request->judul_film;
        // $bioskop->rating_film = $request->rating_film;
        // $bioskop->genre_film = $request->genre_film;
        // $bioskop->sutradara_film = $request->sutradara_film;
        // $bioskop->tahun_film = $request->tahun_film;
        $bioskop->save();
        return redirect()->route('bioskop.index')->with('success','Bioskop has been created successfully.');
    }

    public function show(Bioskop $bioskop)
    {
        return view('bioskop.show',compact('bioskop'));
    }

    public function edit(Bioskop $bioskop)
    {
        return view('bioskop.edit',compact('bioskop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_bioskop' => 'required',
            'telepon_bioskop' => 'required',
            'alamat_bioskop' => 'required',
            // 'judul_film' => 'required',
            // 'rating_film' => 'required',
            // 'genre_film' => 'required',
            // 'sutradara_film' => 'required',
            // 'tahun_film' => 'required',
        ]);
        $bioskop = Bioskop::find($id);
        $bioskop->nama_bioskop = $request->nama_bioskop;
        $bioskop->telepon_bioskop = $request->telepon_bioskop;
        $bioskop->alamat_bioskop = $request->alamat_bioskop;
        // $bioskop->judul_film = $request->judul_film;
        // $bioskop->rating_film = $request->rating_film;
        // $bioskop->genre_film = $request->genre_film;
        // $bioskop->sutradara_film = $request->sutradara_film;
        // $bioskop->tahun_film = $request->tahun_film;
        $bioskop->save();
        return redirect()->route('bioskop.index')->with('success','Bioskop Has Been updated successfully');
    }

    public function destroy(Bioskop $bioskop)
    {
        $bioskop->delete();
        return redirect()->route('bioskop.index')->with('success','Bioskop has been deleted successfully');
    }
}
