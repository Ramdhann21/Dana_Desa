<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dana;

class DanaController extends Controller
{
    public function index()
    {
        $danas = Dana::all();
        return view('Laporan', compact('danas'));
    }

    public function create()
    {
        return view('danas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'total' => 'required|numeric',
        ]);

        Dana::create($request->all());

        return redirect()->route('danas.index')
                         ->with('success', 'Dana created successfully.');
    }

    public function edit(Dana $dana)
    {
        return view('danas.edit', compact('dana'));
    }

    public function update(Request $request, Dana $dana)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'total' => 'required|numeric',
        ]);

        $dana->update($request->all());

        return redirect()->route('danas.index')
                         ->with('success', 'Dana updated successfully');
    }

    public function destroy(Dana $dana)
    {
        $dana->delete();

        return redirect()->route('danas.index')
                         ->with('success', 'Dana deleted successfully');
    }
}

