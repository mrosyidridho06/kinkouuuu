<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use App\Models\LayananPenitipan;
use Illuminate\Http\Request;

class LayananPenitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatitip = LayananPenitipan::with('hewan','customer')->paginate(10);
        return view('penitipan.data-layanan-penitipan', compact('datatitip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hwn = Hewan::all();
        $cust = Customer::all();
        return view('penitipan.create-layanan-penitipan',compact('hwn','cust'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LayananPenitipan::create([
            'hewan_id' => $request->hewan_id,
            'customer_id' => $request->customer_id,
            'tglin' => $request->tglin,
            'tglout' => $request->tglout,
            'biayatitip' => $request->biayatitip,
        ]);

        return redirect('/penitipan/data-layanan-penitipan')->with('toast_success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hwn = Hewan::all();
        $cust = Customer::all();
        $titip = LayananPenitipan::with('hewan','customer')->findorfail($id);
        return view('/penitipan/edit-layanan-penitipan',compact('titip','hwn','cust'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $titip = LayananPenitipan::findorfail($id);
        $titip->update($request->all());

        return redirect('/penitipan/data-layanan-penitipan')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $titip = LayananPenitipan::findorfail($id);
        $titip->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }

    public function print()
    {
        $datatitip = LayananPenitipan::all();
        return view('penitipan/print-layanan-penitipan', compact('datatitip'));
    }

    public function printdetail($id)
    {
        $datatitipdetail = LayananPenitipan::with('hewan','customer')->findorfail($id);
        return view('/penitipan/print-layanan-penitipan-detail', compact('datatitipdetail'));
    }
}
