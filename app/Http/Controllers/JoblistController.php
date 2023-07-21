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
    public function display(Request $request) {
        setlocale(LC_TIME, 'fr_FR');

        $query = OffreTravail::query()->orderBy('created_at', 'desc');
    
        // Filter by city
        $city = $request->input('ville');
        if ($city) {
            $query->where('ville', $city);
        }
    
        // Filter by category
        $category = $request->input('catégorie');
        if ($category) {
            $query->where('catégorie', $category);
        }
    
        // Filter by client name (assuming the client table has a 'name' column)
        $clientName = $request->input('name');
        if ($clientName) {
            $query->whereHas('client', function ($query) use ($clientName) {
                $query->where('name', 'LIKE', "%{$clientName}%");
            });
        }
    
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
    
        $offres = $query->paginate(8);
    
        return view('pages.joblist', [
            'cities' => $cities,
            'offres' => $offres
        ]);
    }
}
