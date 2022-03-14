<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        session_start();
        ob_start();
        $_SESSION["lineid"] = $_GET["userId"];
        session_write_close();

        // return view('directuser', [
        //     'modulename' => "TimeTour",
        // ]);
        return redirect()->route('timetour.index');
    }
}
