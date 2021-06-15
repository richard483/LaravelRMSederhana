<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BahanBaku;


class BahanBakuController extends Controller
{
    //
    public function create(){
        return view('bahan_baku.welcome');
    }
    public function store(Request $request){
        BahanBaku::create([
            'name'=>$request->name,
            'supplier'=>$request->supplier
        ]);
        return back();
    }

    public function listBahan(){
        $bahan_baku = BahanBaku::all();
        return view('bahan_baku.list', compact('bahan_baku'));
    }
    public function info($id){
        $bahan_baku = BahanBaku::findOrFail($id);
        return view('bahan_baku.info', compact('bahan_baku'));
    }
    public function delete($id){
        BahanBaku::destroy($id);
        return back();

    }
    public function edit($id){
        $bahan_baku = BahanBaku::findOrFail($id);
        return view('bahan_baku.edit', compact('bahan_baku'));
    }
    public function update($id, Request $request){
        BahanBaku::findOrFail($id)->update([
            'name' => $request->name,
            'supplier' => $request->supplier,
        ]);
        return redirect('/main/bahan_baku/list');
    }
}
