<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function index()
    {
        return view('userdata.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'nik' => 'required|max:255',
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'rt_rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'pekerjaan' => 'required',
            'kewaraganegaraan' => 'required',
        ]);

        $userData = UserData::create($request->all());

        return redirect('/');
    }
}
