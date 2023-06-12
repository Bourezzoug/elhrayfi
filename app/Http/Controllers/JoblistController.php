<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoblistController extends Controller
{
    public function index() {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        return view('pages.joblist',[
            'cities'    =>  $cities
        ]);
    }
}
