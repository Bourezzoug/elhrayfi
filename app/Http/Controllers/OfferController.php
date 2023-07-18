<?php

namespace App\Http\Controllers;

use App\Models\OffreTravail;
use App\Models\User;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    
    public function index($id) {
        $offers = OffreTravail::where('id', $id)->first();
        $client = $offers->client->latest()->take(2)->get();
        $relatedJob = OffreTravail::where('catégorie',$offers->catégorie)->take(4);
        // $companies = User::where('user_type','3')
        //             ->where('id','<>',$client->id)
        //             ->take(4)
        //             ->get();
        return view('pages.offreTravail',[
            'client'    => $client,
            'offers'    => $offers,
            'relatedJob' =>  $relatedJob
        ]);
    }
}
