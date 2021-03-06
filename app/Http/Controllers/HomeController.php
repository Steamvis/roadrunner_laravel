<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        debugbar()->startMeasure('test', 'eeeee');
        debugbar()->error('sadasdas');
        debugbar()->emergency('sadasd');
        debugbar()->stopMeasure('okay');
        return view('welcome');
    }
}
