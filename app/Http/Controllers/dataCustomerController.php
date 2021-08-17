<?php

namespace App\Http\Controllers;

use App\Models\dataCustomer;
use Illuminate\Http\Request;

class dataCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dataCustomer::all();
        return view('/home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thanks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'customername' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ];
        $this->validate($request, $rules);

        $data = new dataCustomer();
        $data->customername = $request->input('customername');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->save();
        return redirect()->route('thanks')->with('success', $request->input('customername'));
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
        $data = dataCustomer::find($id);
        $data->delete();
        return redirect()->route('home')->with('succes', 'Customer berhasil dihapus');
    }
}
