<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealers;
use Illuminate\Support\Facades\DB;
use App\Exports\SubmarineExport;
use Maatwebsite\Excel\Facades\Excel;

class SubmarineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $deal = Dealers::where('status', 'licenced')->where('service_id', 9)->get();

        return view('submarine.index')->with('deal', $deal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('submarine.create');
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
            'eff_date' => 'required',
            'ex_date' => 'required',
        ]);

        //create
        $record = new Dealers;
        $record->company_name = $request->input('name');
        $record->licence_id = $request->input('l_id');
        $record->service_id = 9;
        $record->email = $request->input('email');
        $record->class = $request->input('class');
        $record->phone_1 = $request->input('phone_1');
        $record->phone_2 = $request->input('phone_2');
        $record->address = $request->input('address');
        $record->po_box = $request->input('pobox');
        $record->digi_addr = $request->input('digi');
        $record->user_id = auth()->user()->id;
        $record->effect_date = $request->input('eff_date');
        $record->expiry_date = $request->input('ex_date');
        $record->save();

        return redirect('/submarine')->withSuccess('New requested submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deal =DB::table('dealers')
        ->join('users', 'dealers.user_id', '=', 'users.id')
        ->select('dealers.id','dealers.licence_id', 'dealers.company_name', 'dealers.phone_1', 'dealers.phone_2', 'dealers.address', 'dealers.digi_addr','dealers.po_box', 'dealers.email', 'dealers.class', 'dealers.effect_date', 'dealers.expiry_date', 'users.name','dealers.updated_at')
        ->where('dealers.id',$id)
        ->get();$deal =DB::table('dealers')
        ->join('users', 'dealers.user_id', '=', 'users.id')
        ->select('dealers.id','dealers.licence_id', 'dealers.company_name', 'dealers.phone_1', 'dealers.phone_2', 'dealers.address', 'dealers.digi_addr','dealers.po_box', 'dealers.email', 'dealers.class', 'dealers.effect_date', 'dealers.expiry_date', 'users.name','dealers.updated_at')
        ->where('dealers.id',$id)
        ->get();

        return view('submarine.show')->with('deal', $deal[0]);
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
            "po_box" => $request->input('pobox'),
            "digi_addr" => $request->input('digi'),
            "user_id" => auth()->user()->id,
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
        return redirect('/fixed')->withSuccess("Licence Revoke Successfully");
    }
    public function export()
    {
        return Excel::download(new SubmarineExport(), 'submarine.xlsx');
    }
}
