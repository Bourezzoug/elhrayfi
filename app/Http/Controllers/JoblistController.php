<?php

namespace App\Http\Controllers;

use App\Models\OffreTravail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JoblistController extends Controller
{
    public function index() {
        setlocale(LC_TIME, 'fr_FR');
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);

        $offres = OffreTravail::orderBy('created_at','desc')->paginate(10);

        return view('pages.joblist',[
            'cities'    =>  $cities,
            'offres'    =>  $offres
        ]);
    }
}
