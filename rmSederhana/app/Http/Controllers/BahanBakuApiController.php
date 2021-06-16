<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BahanBaku;

class BahanBakuApiController extends Controller
{
    //
    public function index (){
        $bahan_baku = BahanBaku::all();
        return response()->json([
            'bahan_bakus' =>$bahan_baku
        ]);
    }

    public function store(Request $request){
        BahanBaku::create([
            'name' => $request->bahan_name,
            'supplier' => $request->bahan_supplier,
        ]);
        return response()->json([
            'message' => 'Success added Bahan Baku' 
        ]);
    }

    public function update(Request $request, $id){
        BahanBaku::findOrFail($id)->update([
            'name'=>$request->bahan_name,
            'supplier'=>$request->bahan_supplier
        ]);    

        return response()->json([
            'message' => 'Success updated Bahan Baku' 
        ]);
    }
    
    public function delete($id){
        BahanBaku::destroy($id);
        return response()->json([
            'message' => 'Success deleted Bahan Baku' 
        ]);
    }
}
