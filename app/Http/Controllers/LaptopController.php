<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index(){

        $data = Laptop::all();
        return view('laptopoke',compact('data'));
    }

    public function tambahlaptop(){

        $data = Laptop::all();
        return view('tambahdata',compact('data'));
    }

    public function insertdata(Request $request){
        //dd($request->all());
        $data = Laptop::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotolaptop/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('laptopoke')->with('success','Data Laptop Berhasil di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Laptop::find($id);
        // dd($data);

        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Laptop::find($id);
        $data->update($request->all());
        return redirect()->route('laptopoke')->with('success','Data Laptop Berhasil di Update');
    }

    public function delete($id){
        $data = Laptop::find($id);
        $data->delete();
        return redirect()->route('laptopoke')->with('success','Data Laptop Berhasil di Hapus');
    }
    
}
