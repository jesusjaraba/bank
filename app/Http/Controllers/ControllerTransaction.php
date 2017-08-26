<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Transaction;
use App\model\Customer;
use App\model\DebitCard;
use App\model\Account;
use App\Http\Requests;

class ControllerTransaction extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
     $tarjeta = DebitCard::where('cardno',$request['cardDesti'])->get();
        
        
    foreach ($tarjeta as $key) {
        $cuentaCliente = $key->Customer_id;
    }



        $transaction = Transaction::create([
            'value' => $request['value'],
            'Customer_id' => $cuentaCliente,
            'DebitCard_cardno' => $request['card'],
             
        ]);

        $transaction->save();

        return back();
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
        //
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

    public function viewTransaction($numberCard){

        $transactions = Transaction::where('DebitCard_cardno', $numberCard)->get();

        return view('transacciones.index', compact('transactions','numberCard'));

    }
}
