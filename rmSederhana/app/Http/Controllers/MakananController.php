<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class MakananController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){
        Makanan::create([
            'name' => $request -> food_name,
            'recipe' => $request -> food_rec,
            'price' => $request -> food_price
        ]);
        return redirect('/');
    }
    public function listFood(){
        $makanan = Makanan::all();
        return view('list', compact('makanan'));
        //*compact buat passing ke view
    }
    public function edit($id){
        $makanan = Makanan::findOrFail($id);
        return view('edit', compact('makanan'));
    }
    public function update($id, Request $request){
        Makanan::findOrFail($id)->update([
            'name' => $request->food_name,
            'recipe' => $request->food_rec,
            'price' => $request->food_price
        ]);
        return redirect('/main');
    }
    public function delete($id){
        Makanan::destroy($id);
        return back();

    }
}
