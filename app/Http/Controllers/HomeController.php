<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Inscrit;
use App\Models\OffreTravail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class HomeController extends Controller
{


    public function index()
    {
        setlocale(LC_TIME, 'fr_FR');
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
    
        $offres = OffreTravail::orderBy('created_at','desc')->take(4)->get();
    
        foreach ($offres as $offre) {
            $offre->formattedTime = Carbon::parse($offre->created_at)->diffForHumans();
        }

        $blog = Blog::orderBy('created_at','desc')->take(3)->get();
    
        return view('pages.homepage', [
            'cities' => $cities,
            'offres' => $offres,
            'artisans'  =>  User::where('user_type','2')->where('actif','1')->orderBy('created_at','desc')->take(4)->get(),
            'artisansCount'  =>  User::where('user_type','2')->count(),
            'clientsCount'  =>  User::where('user_type','3')->count(),
            'offresCount'  =>  OffreTravail::all()->count(),
            'blog'  =>  $blog
        ]);
    }
    

    public function store(Request $request) {
        try {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique(Inscrit::class)],
            ]);
    
            Inscrit::create([
                'email' => strtolower($request->email),
            ]);
            return response()->json(['message' => 'Success!'], 200);
        
        } catch (\Exception $e) {
    
            return response()->json(['message' => $e->getMessage()], 422);
        }
    }
}
