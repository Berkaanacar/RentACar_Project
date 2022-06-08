<?php

namespace App\Http\Controllers;

use App\Models\Contracts;
use App\Models\Employee;
use App\Models\Information;
use App\Models\Renter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $renterData = Renter::get()->load('getInfo', 'getCars', 'getContract');
        // $cars = Renter::get()->load('getCars');
        // return $renters;
        // $contract = DB::table('contracts')
        //     ->join('renters', 'contracts.renter_id', '=', 'renters.id')
        //     ->select('contracts.*',)
        //     ->get();
        return response()->json(['renterData' => $renterData]);
        // return response()->json(['Renter' => $renter]);
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
        $information = Information::insertGetId([
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'tc_no' => $request->tc_no,
        ]);
        $renter = Renter::create([
            'info_id' => $information
        ]);
        return response()->json(['information' => $information, 'Renter' => $renter]);
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
}
