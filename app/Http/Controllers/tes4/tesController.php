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
        $data = $request->json()->all();

        $result = array(
            "net_sales" => $data['total'],
            "pajak_rp" =>  $data['total'] * $data['persen_pajak']  / 100
        );

        return response()->json($result);
    }
}
