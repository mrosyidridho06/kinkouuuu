<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use App\Models\Penyakit;
use App\Models\LayananBerobat;
use App\Models\RekamMedis;
use App\Models\Status_OP;
use Illuminate\Http\Request;

class LayananBerobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $datalyob = LayananBerobat::with('hewan','customer','penyakit','status_op')->paginate(50);
        return view('berobat.data-layanan-berobat', compact('datalyob'));
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
        $pykt = Penyakit::all();
        $status = Status_OP::all();
        return view('berobat.create-layanan-berobat',compact('hwn','cust','pykt','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LayananBerobat::create([
            'hewan_id' => $request->hewan_id,
            'customer_id' => $request->customer_id,
            'penyakit_id' => $request->penyakit_id,
            'status_op_id' => $request->status_op_id,
            'tglobat' => $request->tglobat,
            'biayaobat' => $request->biayaobat,
        ]);

        RekamMedis::create([
            'hewan_id' => $request->hewan_id,
            'customer_id' => $request->customer_id,
            'penyakit_id' => $request->penyakit_id,
            'status_op_id' => $request->status_op_id,
            'tglobat' => $request->tglobat,
            'biayaobat' => $request->biayaobat,
        ]);

        return redirect('/berobat/data-layanan-berobat')->with('toast_success', 'Data Berhasil Disimpan');
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
        $pykt = Penyakit::all();
        $status = Status_OP::all();
        $lyob = LayananBerobat::with('hewan','customer','penyakit','status_op')->findorfail($id);
        return view('/berobat/edit-layanan-berobat',compact('lyob','hwn','cust','pykt','status'));
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
        $lyob = LayananBerobat::findorfail($id);
        $lyob->update($request->all());

        return redirect('/berobat/data-layanan-berobat')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lyob = LayananBerobat::findorfail($id);
        $lyob->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }

    public function print()
    {
        $datalyob = LayananBerobat::all();
        return view('berobat/print-layanan-berobat', compact('datalyob'));
    }

    public function printdetail($id)
    {
        $datalyobdetail = LayananBerobat::with('hewan','customer','penyakit','status_op')->findorfail($id);
        return view('/berobat/print-layanan-berobat-detail', compact('datalyobdetail'));
    }
}
