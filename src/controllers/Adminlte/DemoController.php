<?php

namespace App\Http\Controllers\Adminlte;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminlte.pages.demo.dashboard');
    }

    public function about()
    {
    	return view('adminlte.pages.demo.about');
    }

    public function form()
    {
    	return view('adminlte.pages.demo.form');
    }

    public function store(Request $request)
    {
    	$request->validate([
				'nama'=>'required',
				'email'=>'required',
				'password'=>'required',
				'alamat'=>'required',
				'jenis_kelamin'=>'required',
			]);

		return 'Success';
    }

    public function table()
    {
    	return view('adminlte.pages.demo.table');
    }

    public function destroy($id)
    {
    	return 'Deleted';
    }
}
