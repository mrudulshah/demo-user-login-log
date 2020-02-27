<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClass\ReportBuilder;
use App\User;

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
        $report = new ReportBuilder(); 
        echo "<pre>";print_r($report->build('csv')->get());echo "</pre>";
        echo "<pre>";print_r($report->build('csv')->export());echo "</pre>";

        return view('home');
    }
}
