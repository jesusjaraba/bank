<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Bank;
use App\Http\Requests;

class ControllerBank extends Controller
{
    public function index()
    {
        $objBanks = Bank::all();

        return view('bank.index',compact('objBanks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objBank = Bank::create([
            'code' => $request['code'],
            'address' => $request['address'],
            
        ]);

        $objBank->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if ($request->ajax()){

        $objBank = Bank::find($id);

        return response()->json($objBank);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if ($request->ajax()) {

            $customer= Bank::findOrFail($id);

            $customer->code = $request['modal-edit-codigo'];
            $customer->address = $request['modal-edit-address'];
           
            

            $customer->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
