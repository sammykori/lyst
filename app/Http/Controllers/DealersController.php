<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealers;

class DealersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deal = Dealers::where('status', 'licenced')->where('service_id', 12)->get();

        return view('dealership.index')->with('deal', $deal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dealership.create');
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
            'name' => 'required',
            'l_id' => 'required',
            'class' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_1' => 'required',
            'eff_date' => 'required',
            'ex_date' => 'required',
        ]);

        //create
        $record = new Dealers;
        $record->company_name = $request->input('name');
        $record->licence_id = $request->input('l_id');
        $record->service_id = 12;
        $record->email = $request->input('email');
        $record->class = $request->input('class');
        $record->phone_1 = $request->input('phone_1');
        $record->phone_2 = $request->input('phone_2');
        $record->address = $request->input('address');
        $record->effect_date = $request->input('eff_date');
        $record->expiry_date = $request->input('ex_date');
        $record->save();

        return redirect('/dealers')->withSuccess('New requested submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deal = Dealers::find($id);

        return view('dealership.show')->with('deal', $deal);
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
        Dealers::where('id', $id)
        ->update([
            "company_name" => $request->input('name'),
            "licence_id" => $request->input('l_id'),
            "email" => $request->input('email'),
            "class" => $request->input('class'),
            "phone_1" => $request->input('phone_1'),
            "phone_2" => $request->input('phone_2'),
            "address" => $request->input('address'),
            "effect_date" => $request->input('eff_date'),
            "expiry_date" => $request->input('ex_date')
        ]);

        return back()->withSuccess('Licence information has been updated');
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

       /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function revoke(Request $request)
    {
        $deal = Dealers::find($request->input('dealId'));

        if($deal){
            $deal->status = 'unlicenced';
            $deal->save();
        }
        return redirect('/dealers')->withSuccess("Licence Revoke Successfully");
    }
}
