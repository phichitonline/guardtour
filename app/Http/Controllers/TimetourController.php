<?php

namespace App\Http\Controllers;

use App\Models\Timetour;
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
        return Timetour::all();
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
        $time_now = date("h:i:s");

        // กำหนดตัวแปรรับค่าจากฟอร์ม
        $data_timetour = array(
            'guard_id' => $request->input('userId'),
            'point_qrcode' => $request->input('scanCode'),
            'gps_stamp' => $request->input('gps_stamp'),
            'tour_date_stamp' => $date_now,
            'tour_time_stamp' => $time_now
        );

        // Create data to tabale product
        return Timetour::create($data_timetour);
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
