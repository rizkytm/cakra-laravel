<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referensi;
use App\UnsurInstrinsik;
use Auth;

class ReferensiController extends Controller
{
    public function index()
    {
    	$referensis = Referensi::orderBy('created_at', 'desc')->get();

    	return view('referensi.referensi_index', compact('referensis'));
    }

    public function create()
    {
    	return view('referensi.ref_create');
    }

    public function store(Request $request)
    {
    	$this->validate(request(), [
    		'judul' => 'required',
    		'materi' => 'required|min:10',
    	]);

    	Referensi::create([
    		'judul' => request('judul'),
    		'sumber' => request('sumber'),
    		'penulis' => request('penulis'),
    		'materi' => request('materi'),	
    		'user_id' => auth()->id(),
    	]);
    	
    	return redirect()->route('referensi')->with('success', 'Referensi Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $ref = Referensi::find($id);
        $ui = UnsurInstrinsik::where('referensi_id', $id)->first();

        return view('referensi.ref_show', compact('ref', 'ui'));
    }

    public function refedit($id)
    {
        $ui = UnsurInstrinsik::where('referensi_id', $id)->first();

        return view('referensi.edit_ui', compact('ui'));
    }

    public function updateui($id)
    {
    	$ui = UnsurInstrinsik::where('referensi_id', $id)->first();
    	
    	$ui->update([
    		'tema' => request('tema'),
    		'tokoh' => request('tokoh'),
    		'alur' => request('alur'),
    		'latar' => request('latar'),
    		'amanat' => request('amanat'),
    	]);

    	return redirect()->route('show.referensi', $ui->referensi_id)->with('info', 'Analisa Berhasil Diubah');
    }

    public function refstore($id, Request $request)
    {
    	$ref = Referensi::find($id);

    	UnsurInstrinsik::create([
    		'tema' => request('tema'),
    		'tokoh' => request('tokoh'),
    		'alur' => request('alur'),
    		'latar' => request('latar'),
    		'amanat' => request('amanat'),	
    		'user_id' => auth()->id(),
    		'referensi_id' => $ref->id
    	]);
    	
    	return redirect()->route('referensi')->with('success', 'Unsur Intrinsik Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
        $ref = Referensi::find($id);
        $ref->delete();

        return redirect()->back()->with('danger', 'Referensi Berhasil Dihapus');
    }

    public function destroyui($id)
    {
        $ui = UnsurInstrinsik::find($id);
        $ui->delete();

        return redirect()->back()->with('danger', 'Analisa Berhasil Dihapus');
    }

    public function editref($id)
    {
        $ref = Referensi::find($id);

        return view('referensi.ref_edit', compact('ref'));
    }

    public function updateref($id, Request $request)
    {
        $ref = Referensi::find($id);

        $ref->update([
            'judul' => request('judul'),
            'sumber' => request('sumber'),
            'penulis' => request('penulis'),
            'materi' => request('materi'),
        ]);
        
        return redirect()->route('referensi')->with('info', 'Referensi Berhasil Diedit');
    }
}
