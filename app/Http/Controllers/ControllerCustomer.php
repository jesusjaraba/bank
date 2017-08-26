<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Bank;
use App\model\Customer;
use App\model\Account;
use App\Http\Requests;

class ControllerCustomer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objBanks = Bank::all();
        $objCustomers = Customer::all();

        return view( 'Customer.index',compact('objBanks','objCustomers'));
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
        $objCustomer = Customer::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'dob' => $request['dob'],
            'cedula' => $request['cc'],
            'Bank_id' => $request['bank'],
            
        ]);

        $objCustomer->save();

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

            $customer= Customer::findOrFail($id);

            return response()->json($customer);
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

            $customer= Customer::findOrFail($id);

            $customer->name = $request['modal-edit-name'];
            $customer->address = $request['modal-edit-address'];
            $customer->dob = $request['modal-edit-dob'];
            $customer->Bank_id = $request['modal-edit-bank'];
            $customer->cedula = $request['modal-edit-cc'];
            

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

    public function viewCustomer($id){

        $customer = Customer::find($id);

        $nameCustomer = $customer->name;
        $idCustomer = $customer->id;
        $idBank = $customer->Bank_id;

        $accounts = Account::where('Customer_id',$id)->get();

        return view('customer.transaction', compact('nameCustomer','idCustomer','accounts','idBank'));
    }
}
