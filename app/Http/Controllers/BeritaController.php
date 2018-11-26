<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index()
    {
    	$berita = Berita::orderBy('created_at', 'desc')->get();

    	return view('news.berita', compact('berita'));
    }

    public function create()
    {
    	return view('news.buat');
    }

    public function store(Request $request)
    {
    	$this->validate(request(), [
    		'judul' => 'required',
    		'deskripsi' => 'required|min:10',
    	]);

    	Berita::create([
    		'judul' => request('judul'),
    		'sumber' => request('sumber'),
    		'penulis' => request('penulis'),
    		'deskripsi' => request('deskripsi'),	
    	]);
    	
    	return redirect()->route('berita')->with('success', 'Berita Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $berita = Berita::find($id);

        return view('news.berita_show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::find($id);

        return view('news.edit_berita', compact('berita'));
    }

    public function update($id)
    {
    	$berita = Berita::find($id);
    	
    	$berita->update([
    		'judul' => request('judul'),
    		'sumber' => request('sumber'),
    		'penulis' => request('penulis'),
    		'deskripsi' => request('deskripsi'),
    	]);

    	return redirect()->route('berita')->with('info', 'Berita Berhasil Diubah');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->back()->with('danger', 'Berita Berhasil Dihapus');
    }
}
