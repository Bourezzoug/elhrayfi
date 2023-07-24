<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function index() {
        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        $artisans = User::orderBy('created_at', 'desc')
                    ->where('user_type','2')
                    ->where('status','1')
                    ->with('experiences')->get();
        return view('pages.artisans',[
            'cities'  =>  $cities,
            'artisans' => $artisans
        ]);
    }

    public function show($name)
    {
        $artisan = User::where('name', $name)->with('experiences')->first();
        return view('pages.resume', [
            'artisan' => $artisan
        ]);
    }
    public function display(Request $request)
    {
        $query = User::query();
        $query->orderBy('created_at', 'desc')->where('user_type', '2')->where('status','1')->with('experiences');
    
        // Filter by name
        $name = $request->input('name');
        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }
    
        // Filter by city
        $city = $request->input('ville');
        if ($city) {
            $query->where('ville', $city);
        }
    
        // Filter by category
        $category = $request->input('catégorie');
        if ($category) {
            $query->where('artisan_job_category', $category);
        }
    
        $artisans = $query->paginate(9);
    

        $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
        $cities = json_decode(file_get_contents($url), true);
        return view('pages.artisans', [
            'cities'  =>  $cities,
            'artisans' => $artisans
        ]);
    }
}
