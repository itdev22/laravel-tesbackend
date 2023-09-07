<?php

namespace App\Http\Controllers\tes4;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tes4.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = array(
            "net_sales" => $request->total,
            "pajak_rp" =>  $request->total * $request->persen_pajak  / 100
        );

        return response()->json($result);
    }
}
