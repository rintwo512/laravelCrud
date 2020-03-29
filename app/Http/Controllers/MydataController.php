<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class MydataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Karyawan::all();

        return view('mydata.index', ['datas' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Karyawan();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->nik = $request->nik;
        $data->image = "default.png";
        $data->save();
        return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan, $id)
    {
        $data = Karyawan::find($id);
        return view('mydata.detail', ['singel' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan, $id)
    {
        $data = Karyawan::find($id);
        return view('mydata.update', ['id' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan, $id)
    {
        $data = Karyawan::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->nik = $request->nik;

        $data->update();
        return redirect('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan, $id)
    {
        $data = Karyawan::find($id);
        $data->delete();
        return redirect('/data');
    }
}
