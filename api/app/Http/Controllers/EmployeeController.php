<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get()->load('getInfo');
        // $information = DB::table('information')
        //     ->join('employees', 'information.id', '=', 'employees.info_id')
        //     ->select('information.name', 'information.surname', 'information.phone')
        //     ->get();
        // $employee = Employee::get();
        // $info = Employee::select('info_id as label', 'id as value')->get();
        return response()->json(['employeeData' => $employees]);
    }
    // 'info' => $info,
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
        $employee = Employee::create([
            'info_id' => $information
        ]);

        return response()->json(['İnformation' => $information, 'Employee' => $employee]);
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
