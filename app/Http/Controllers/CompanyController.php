<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index($name)
    {
        $client = User::where('name', $name)->first();
        $offers = $client->offers()->latest()->take(2)->get();
        $companies = User::where('user_type','3')
                    ->where('id','<>',$client->id)
                    ->take(4)
                    ->get();
        return view('pages.company', [
            'client'    => $client,
            'offers'    => $offers,
            'companies' =>  $companies
        ]);
    }
    
    
}
