<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\DebitCard;
use App\Http\Requests;

class ControllerDebitCard extends Controller
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
        $account = DebitCard::create([
            'ownedby' => $request['ownedby'],
            'Account_id' => $request['account_id'],
            'Customer_id' => $request['Customer_id'],
            'Bank_id' => $request['bank'],
            'balance' => $request['balance'],
            'cardno' => $request['numTarjeta'],
            
            
        ]);

        $account->save();

        return back()->with('flash', 'Tarjeta asignada a la cuenta!!');
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

    public function viewInfo($id){
        $cardInfo = DebitCard::where('Account_id', $id)->get();


        return view('customer.viewInfo' ,compact('cardInfo'));
    }
}
