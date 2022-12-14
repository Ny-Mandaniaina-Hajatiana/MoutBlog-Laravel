<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class PostController extends Controller
{
    public function show($slug)
    {
        //obtient le message demandé, s'il est publié.
        $posts = Post::query()
            ->where('is_published', true)
            ->where('slug', $slug)
            ->firstOrFail();

        //obtient toutes les catégories
        $categories = Category::all();

        //obtient tous les tags
        $tags = Tag::all();

        //Pagination
        $posts = Post::where('is_published',true)
                        ->orderBy('id','desc')
                        ->paginate(1);
                        return view('home', compact('posts'));


        //obtient les 5 derniers messages
        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();


        //articles similaire
         $related_posts = Post::query()
         ->where('is_published',true)
         ->whereHas('tags', function ($rela) use ($post) {
            return $rela->whereIn('name', $post->tags->pluck('name'));
        })
        ->where('id', '!=', $post->id)->take(3)->get();


        //assigner les variables à la vue
        return view('post', [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts,
        ]);
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $posts = Post::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        $categories = Category::all();

        $tags = Tag::all();

        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }

}
