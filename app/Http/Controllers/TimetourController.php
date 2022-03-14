<?php

namespace App\Http\Controllers;

use App\Models\Timetour;
use App\Models\Guard;
use Illuminate\Http\Request;

class TimetourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineid = "U59bdf1afa739eecc378d8fbdc2a4c02e";
        $guard = Guard::where('lineid', $lineid)->count();

        return view('tour', [
            'modulename' => "TimeTour",
            'guard' => $guard,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date_now = date("Y-m-d");
        $time_now = date("H:i:s");

        $request->validate(
            [
                'scanCode' => 'required',
                'gps_stamp' => 'required',
            ],
            [
                'scanCode.required'=> 'กรุณาสแกนจุดตรวจ',
                'gps_stamp.required'=> 'กรุณาอ่านพิกัด GPS',
            ]
        );

        // กำหนดตัวแปรรับค่าจากฟอร์ม
        $data_timetour = array(
            'guard_id' => $request->input('userId'),
            'point_qrcode' => $request->input('scanCode'),
            'gps_stamp' => $request->input('gps_stamp'),
            'tour_date_stamp' => $date_now,
            'tour_time_stamp' => $time_now
        );

        // Create data to tabale
        Timetour::create($data_timetour);

        // return Timetour::create($data_timetour);
        return redirect()->route('timetour.index')->with('timetour-saved','บันทึกข้อมูลแล้ว');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timetour  $timetour
     * @return \Illuminate\Http\Response
     */
    public function show(Timetour $timetour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timetour  $timetour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timetour $timetour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timetour  $timetour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timetour $timetour)
    {
        //
    }
}
