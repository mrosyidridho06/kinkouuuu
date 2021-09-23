<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hewan;
use App\Models\Penyakit;
use App\Models\RekamMedis;
use App\Models\Status_OP;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class RekamMedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datarm = RekamMedis::with('hewan','customer','penyakit','status_op')->paginate(50);
        return view('rekam_medis.data-rekam-medis', compact('datarm'));
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
        return view('rekam_medis.create-rekam-medis',compact('hwn','cust','pykt','status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RekamMedis::create([
            'hewan_id' => $request->hewan_id,
            'customer_id' => $request->customer_id,
            'penyakit_id' => $request->penyakit_id,
            'status_op_id' => $request->status_op_id,
            'tglobat' => $request->tglobat,
            'biayaobat' => $request->biayaobat,
        ]);

        return redirect('/rekam_medis/data-rekam-medis')->with('toast_success', 'Data Berhasil Disimpan');
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
        $rm = RekamMedis::with('hewan','customer','penyakit','status_op')->findorfail($id);
        return view('/rekam_medis/edit-rekam-medis',compact('rm','hwn','cust','pykt','status'));
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
        $rm = RekamMedis::findorfail($id);
        $rm->update($request->all());

        return redirect('/rekam_medis/data-rekam-medis')->with('toast_success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rm = RekamMedis::findorfail($id);
        $rm->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }

    public function print()
    {
        $datarm = RekamMedis::all();
        return view('rekam_medis/print-rekam-medis', compact('datarm'));
    }
}
