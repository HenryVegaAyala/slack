<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maknz\Slack\Facades\Slack;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('accion');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }


    public function accion()
    {
        Slack::send(' Hello world! ');
        logger('ok');
        return redirect()->home();
    }
}
