<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa = DB::table('mahasiswa')->get();
 
    	return view('index',['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
    	return view('tambah');
    }

    public function store(Request $request)
	{

		DB::table('mahasiswa')->insert([
			'mahasiswa_nim' => $request->nim,
			'mahasiswa_nama' => $request->nama,
			'mahasiswa_jurusan' => $request->jurusan,
			'mahasiswa_semester' => $request->semester,
			'mahasiswa_alamat' => $request->alamat
		]);
		
		return redirect('/mahasiswa');
	 
	}

	public function edit($id)
	{
	
		$mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id',$id)->get();
		
		return view('edit',['mahasiswa' => $mahasiswa]);
	 
	}

	public function update(Request $request)
	{
		
		DB::table('mahasiswa')->where('mahasiswa_id',$request->id)->update([
			'mahasiswa_nim' => $request->nim,
			'mahasiswa_nama' => $request->nama,
			'mahasiswa_jurusan' => $request->jurusan,
			'mahasiswa_semester' => $request->semester,
			'mahasiswa_alamat' => $request->alamat
		]);
		
		return redirect('/mahasiswa');
	}

	public function hapus($id)
	{
		
		DB::table('mahasiswa')->where('mahasiswa_id',$id)->delete();
			
		return redirect('/mahasiswa');
	}

}
