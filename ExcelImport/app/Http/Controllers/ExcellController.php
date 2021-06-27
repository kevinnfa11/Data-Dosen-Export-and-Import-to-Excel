<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Excell;
use App\Dosen;
use Session;
 use App\Imports\ExcellImport;
use App\Exports\ExcellExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class ExcellController extends Controller
{

		public function index2()
	{
		$dosen = Dosen::all();
		return view('excel.index',['dosen'=>$dosen]);
	}
			public function index3()
	{
		$dosen = Dosen::all();
		return view('excel.index2',['dosen'=>$dosen]);
	}

	public function excel()
	{
		$excel = Excell::all();
		return view('excel.data',['excel'=>$excel]);
	}

	public function create() {
		$excel = Excell::all();
		$dosen = Dosen::all();
		return view('excel.create', compact('excel', 'dosen'));
		 //
		}
		public function store(Request $request)
	{

		\App\Excell::create($request ->all());
		return redirect('/nilai');
					
	}
 
	public function index()
	{
		$excel = Excell::all();
		return view('excel.excelo',['excel'=>$excel]);
	}
 
	public function export_excel()
	{
		return Excel::download(new ExcellExport, 'datamahasiswa.xlsx');
	}
	public function import_excel(Request $request) 
{

			// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_mahasiswa',$nama_file);
 
		// import data
		Excel::import(new ExcellImport, public_path('/file_mahasiswa/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Mahasiswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/nilai');


}
}
