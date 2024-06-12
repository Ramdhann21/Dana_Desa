<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::all();
        return view('Tabel', compact('laporans'));
    }
    public function create()
    {
        $laporans = laporan::all();
        return view('tabel', compact('laporans'));
    }

    public function edit()
    {
        $laporans = Laporan::all();
        return view('Tabel', compact('laporans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'keperluan' => 'required',
            'tanggal' => 'required|date',
            'dana_masuk' => 'required|numeric',
            'dana_keluar' => 'required|numeric',
            'total' => 'required|numeric',
            'tujuan' => 'required',
        ]);

        Laporan::create($request->all());

        return redirect()->route('laporans.index')
                         ->with('success', 'Data berhasil ditambahkan.');
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'keperluan' => 'required',
            'tanggal' => 'required|date',
            'dana_masuk' => 'required|numeric',
            'dana_keluar' => 'required|numeric',
            'total' => 'required|numeric',
            'tujuan' => 'required',
        ]);

        $laporan = Laporan::find($id);
        $laporan->update($request->all());

        return redirect()->route('laporans.index')
                         ->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();

        return redirect()->route('laporans.index')
                         ->with('success', 'Data berhasil dihapus.');
    }

    public function cetak()
    {
        $laporans = Laporan::all();
        $pdf = Pdf::loadview('cetak', compact('laporans'));
        return $pdf->download('laporan-transaksi.pdf');
    }

}
