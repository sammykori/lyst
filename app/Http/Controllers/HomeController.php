<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\AllExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Dealers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fixed = Dealers::where('service_id', 1)->get();
        $cell = Dealers::where('service_id', 2)->get();
        $umts = Dealers::where('service_id', 3)->get();
        $bwa = Dealers::where('service_id', 4)->get();
        $igl = Dealers::where('service_id', 5)->get();
        $terrest = Dealers::where('service_id', 6)->get();
        $virtual = Dealers::where('service_id', 7)->get();
        $iwcl = Dealers::where('service_id', 8)->get();
        $sub = Dealers::where('service_id', 9)->get();
        $infras = Dealers::where('service_id', 10)->get();
        $ich = Dealers::where('service_id', 11)->get();
        $vas = Dealers::where('service_id', 12)->get();
        $deal = Dealers::where('service_id', 13)->get();
        return view('home')->with('fixed', $fixed)
                            ->with('cell', $cell)
                            ->with('umts', $umts)
                            ->with('bwa', $bwa)
                            ->with('igl', $igl)
                            ->with('terrest', $terrest)
                            ->with('virtual', $virtual)
                            ->with('iwcl', $iwcl)
                            ->with('sub', $sub)
                            ->with('infras', $infras)
                            ->with('ich', $ich)
                            ->with('vas', $vas)
                            ->with('deal', $deal);
    }
    public function export()
    {
        return Excel::download(new AllExport(), 'licences.xlsx');
    }
}
