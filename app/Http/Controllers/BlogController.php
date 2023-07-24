<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\UniqueView;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        setlocale(LC_TIME, 'fr_FR');
    
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(9);
    
        return view('pages.blog', [
            'blogs' => $blogs
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        setlocale(LC_TIME, 'fr_FR');
        $post = Blog::where('slug', $request->slug)
        ->where('status','publié')
        ->firstOrFail();

        // Get the current user's IP address
        $ipAddress = request()->ip();

        // Check if a unique view exists for this blog post and IP address
        $uniqueView = UniqueView::where('blog_id', $post->id)->where('ip_address', $ipAddress)->first();

        if (!$uniqueView) {
            // If a unique view doesn't exist, create a new one
            $uniqueView = new UniqueView();
            $uniqueView->blog_id = $post->id;
            $uniqueView->ip_address = $ipAddress;
            $uniqueView->save();

            // Increment the unique viewers count in the blogs table
            $post->unique_viewers_count++;
        }
        $post->total_viewers_count++;
        $post->save();

        $recentArticle = Blog::where('status','publié')
            ->where('id', '<>', $post->id)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

            $url = 'https://raw.githubusercontent.com/alaouy/sql-moroccan-cities/master/json/ville.json';
            $cities = json_decode(file_get_contents($url), true);
            return view('pages.post',[
                'post'     =>  $post,
                'cities'    =>  $cities,
                'recentArticle' =>  $recentArticle,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
