<?php

namespace App\Http\Controllers;

use App\Models\OffreTravail;
use Illuminate\Http\Request;

class JobDetailController extends Controller
{
    public function index($id) {
        $jobDetail = OffreTravail::findOrFail($id);
        $relatedJob = OffreTravail::where('catégorie',$jobDetail->catégorie)->take(4);
        return view('pages.jobdetail',[
            'jobDetail' =>  $jobDetail,
            'relatedJob'    =>  $relatedJob
        ]);
    }
}
