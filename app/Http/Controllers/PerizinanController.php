<?php

namespace App\Http\Controllers;
use App\Models\perizinan;
use Illuminate\Http\Request;

class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perizinansip = perizinan::all();
        return view('perizinan.cuti', compact('perizinansip'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perizinan.tambahcuti');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' =>'required',
            'awalcuti'=>'required',
            'akhircuti'=>'required',
            'ket'=>'required',

        ]);

        perizinan::create($request->all());
        return redirect()->route('perizinan.index')
        ->with('success', 'Perizinan Berhasil');
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
    public function edit(perizinan $perizinan)
    {
        return view('perizinan.editcuti', compact('perizinan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perizinan $perizinan )
    {
        $this->validate($request, [
            'nama' =>'required',
            'awalcuti'=>'required',
            'akhircuti'=>'required',
            'ket'=>'required',

        ]);

        $perizinan->update($request->all());

        return redirect()->route('perizinan.index')->with('success','Update Perizinan Berhasil');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perizinan = perizinan::find($id);
        $perizinan->delete();
        return response()->json(['success'=>'NICE']); 
    }

    public function delete($id)
    {
        $perizinan = perizinan::find($id);
        $perizinan->delete();
        return response()->json(['success'=>'ok']);
    }
}
