<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\OffreTravail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    
    public function index($id) {
        $offers = OffreTravail::where('id', $id)->first();
        $client = $offers->client->latest()->take(2)->get();
        $relatedOffers = OffreTravail::where('client_id',$offers->client_id)->take(2)->get();
        $relatedJob = OffreTravail::where('catégorie',$offers->catégorie)
                                    ->where('client_id','<>',$offers->client_id)
                                    ->take(4)->get();
        // $companies = User::where('user_type','3')
        //             ->where('id','<>',$client->id)
        //             ->take(4)
        //             ->get();
        return view('pages.offreTravail',[
            'client'    => $client,
            'offers'    => $offers,
            'relatedJob' =>  $relatedJob,
            'relatedOffers' =>  $relatedOffers
        ]);
    }
    public function contact(Request $request)
    {
        // Validate the form data
        $request->validate([
            'comments' => 'required|string',
        ]);
    
        // Get the job offer ID from the URL parameter
        $jobOfferId = $request->input('job_offer_id');
    
        // Find the job offer (you need to define the relationship between jobs and messages)
        // Assuming you have a Job model with a "messages" relationship to the Message model.
        $job = OffreTravail::findOrFail($jobOfferId);
    
        // Get the sender's user ID (current authenticated user)
        $senderId = Auth::id();
    
        // Get the receiver's user ID from the job offer (assuming the job has a "user_id" column for the client)
        $receiverId = $job->client->id;
    
        // Store the message in the database
        Message::create([
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'message' => $request->input('comments'),
        ]);
    
        // Redirect back to the job offer page or wherever you want after sending the message
        return redirect('/artisan/messages');
    }

    public function contactArtisan(Request $request) {
        $request->validate([
            'comments' => 'required|string',
        ]);

        $senderId = Auth::id();

        $receiverId = $request->input('artisan_id');
    

        Message::create([
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'message' => $request->input('comments'),
        ]);
    
        return redirect('/client/messages');
    }
}
