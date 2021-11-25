<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class OutletController extends Controller
{
    public function __construct()
    {
        $this->Outlet = new Outlet();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'outlet' => $this->Outlet->allData(),
        ];
        return view('outlet.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outlet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:outlets,nama',
            'alamat' => 'required',
            'tlp' => 'required',
        ]);

        $data = [
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'tlp' => Request()->tlp,
        ];

        $this->Outlet->addData($data);
        return redirect()->route('outlet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet, $id)
    {
        $data=[
            'outlet' => $this->Outlet->detailData($id),
        ];
        return view('outlet.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet, $id)
    {
        $data=[
            'outlet' => $this->Outlet->detailData($id),
        ];
        return view('outlet.update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet, $id)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:outlets,nama',
            'alamat' => 'required',
            'tlp' => 'required',
        ]);

        $data = [
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'tlp' => Request()->tlp,
        ];

        $this->Outlet->addData($data);
        return redirect()->route('outlet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        //
    }
}
