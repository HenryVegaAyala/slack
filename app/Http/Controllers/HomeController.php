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
        Slack::to('#test')->send('Are we rich yet?');
        return view('home');
    }


    public function accion()
    {
        Slack::to('#test')->send('Are we rich yet?');
        logger('ok');
        return view('home');
    }
}
