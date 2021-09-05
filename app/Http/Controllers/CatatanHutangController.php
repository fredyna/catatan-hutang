<?php

namespace App\Http\Controllers;

use App\Models\CatatanHutang;
use Illuminate\Http\Request;

class CatatanHutangController extends Controller
{
    public function index()
    {
        $data['catatan'] = CatatanHutang::latest()->get();
        return view('catatan-hutang.index')->with($data);
    }

    public function create()
    {
        return view('catatan-hutang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'kategori' => 'required|in:BAYAR,HUTANG',
            'nominal' => 'required|numeric'
        ]);

        $data = $request->all();

        CatatanHutang::create($data);
        return redirect()->route('catatan-hutang.index')->with('status', 'Berhasil menambahkan data.');
    }

    public function edit($id)
    {
        $data['catatan'] = CatatanHutang::findOrFail($id);
        return view('catatan-hutang.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'kategori' => 'required|in:BAYAR,HUTANG',
            'nominal' => 'required|numeric'
        ]);

        $catatan = CatatanHutang::findOrFail($id);

        $data = $request->all();

        $catatan->update($data);
        return redirect()->route('catatan-hutang.index')->with('status', 'Berhasil memperbarui data.');
    }

    public function destroy($id)
    {
        $catatan = CatatanHutang::findOrFail($id);
        $catatan->delete();

        return redirect()->back()->with('status', 'Berhasil menghapus data.');
    }
}
