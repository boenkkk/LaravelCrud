<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class PegawaiController extends Controller
{

    public function index(){
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->orderBy('pegawai_id')->get();
        $pegawai = DB::table('pegawai')->orderBy('pegawai_id','desc')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);
    }

    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')->where('pegawai_nama','like',"%".$search."%")->paginate(5);

         // mengirim data pegawai ke view index
        return view('index',['pegawai' => $pegawai]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function add(){
		// memanggil view tambah
		return view('add');
	}

	// method untuk insert data ke table pegawai
	public function doAdd(Request $request){
        // validate
        $this->validate($request,[
            'nama' => 'required|min:3',
            'jabatan' => 'required',
            'umur' => 'required|numeric|min:17',
            'alamat' => 'required'
        ]);
        
		// insert data ke table pegawai
		DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	// method untuk edit data pegawai
	public function edit($id){
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pegawai' => $pegawai]);
	}

	// update data pegawai
	public function doEdit(Request $request){
		// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
		]);

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	public function delete($id){
		// delete data pegawai
		DB::table('pegawai')->where('pegawai_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

}
