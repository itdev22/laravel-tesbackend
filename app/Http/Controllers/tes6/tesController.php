<?php

namespace App\Http\Controllers\tes6;

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
        return view('tes6.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $net_untuk_resto = $request->harga_sebelum_markup + ($request->harga_sebelum_markup * $request->markup_persen / 100);

        $result = array(
            "harga_sebelum_markup" => $request->harga_sebelum_markup,
            "net_untuk_resto" => $net_untuk_resto,
            "share_untuk_ojol" => $net_untuk_resto * $request->share_persen / 100
        );
        return response()->json($result);
    }
}
