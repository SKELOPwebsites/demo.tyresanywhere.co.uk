<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Get all blog posts, sorted by the date in descending order
        $blogPosts = BlogPost::orderBy('date', 'desc')->get();

        return Inertia::render('Blog', [
            'blogPosts' => $blogPosts
        ]);
    }

    public function show(Request $request, $slug)
    {
        // Find the current blog post by href/slug
        $currentPost = BlogPost::where('href', "/blog/{$slug}")->first();

        // Get the latest 9 blog posts
        $recentBlogPosts = BlogPost::orderBy('date', 'desc')->limit(9)->get();

        // Check if the blog post exists
        if ($currentPost) {
            return inertia('BlogPost', [
                'slug' => $slug,
                'currentPost' => $currentPost,
                'blogPosts' => $recentBlogPosts
            ]);
        } else {
            abort(404); // If the blog post is not found, return a 404
        }
    }
}
