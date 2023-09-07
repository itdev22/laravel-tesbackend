<?php

namespace App\Http\Controllers\tes5;

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
        return view('tes5.index');
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

        $totalSebelumDiskon = $data['total_sebelum_diskon'];

        $diskonArray = $data['discounts'];

        $totalDiskon = 0;
        $totalHargaSetelahDiskon = $totalSebelumDiskon;

        foreach ($diskonArray as $diskon) {
            $persentaseDiskon = $diskon['diskon'];
            $diskonRupiah = ($persentaseDiskon / 100) * $totalSebelumDiskon;
            $totalDiskon += $diskonRupiah;
            $totalHargaSetelahDiskon -= $diskonRupiah;
        }

        $response = [
            'total_diskon' => $totalDiskon,
            'total_harga_setelah_diskon' => $totalHargaSetelahDiskon,
        ];
        return response()->json($response);
    }
}
