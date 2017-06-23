<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function index() {

        app('debugbar')->info('test info');

        return view('welcome');
    }
}
