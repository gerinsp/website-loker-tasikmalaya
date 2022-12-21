<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Study;
use App\Models\Location;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home'
        ]);
    }

    // public function about()
    // {
    //     return view('about', [
    //         'title' => 'About',
    //         'active' => 'about',
    //         'data' => [
    //             'nama' => 'Gerin Sena Pratama',
    //             'email' => 'denapratama7@gmail.com'
    //         ]
    //     ]);
    // }

    public function blog(Post $post)
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = '> ' . $category->name;
        }

        $trending = Redis::zrevrange('trend', 0, -1);
        $trendings = Post::whereIn('id', $trending)->get();

        // $post = Cache::remember('posts.all', 60, function(){
        //     dd('waktu habis');
        //     return Post::where('pinned', 'no')->latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString();
        // });
        $study = Cache::remember('study', 60, function(){
            return Study::all();
        });
        $category = Cache::remember('category', 60, function(){
            return Category::all();
        });
        $location = Cache::remember('location', 60, function(){
            return Location::all();
        });
        $pinned = Cache::remember('pinned', 60, function(){
            return Post::where('pinned', 'pin')->with([
                'user', 'category', 'company', 'study', 'location'
                ])->get();
        });

        return view('blog', [
            'title' => 'Cari Loker ' . $title,
            'active' => 'blog',
            'post' => Post::where('pinned', 'no')->with([
                'user', 'category', 'company', 'study', 'location'
                ])->latest()->filter(request(['search', 'category']))->paginate(5)->withQueryString(),
            'categories' => $category,
            'studies' => $study,
            'locations' => $location,
            'pinned' => $pinned,
            'trendings' => $trendings
        ]);
    }

    public function post(Post $post)
    {
        $study = Cache::remember('study', 60, function(){
            return Study::all();
        });
        $category = Cache::remember('category', 60, function(){
            return Category::all();
        });
        $location = Cache::remember('location', 60, function(){
            return Location::all();
        });
        $posts = Cache::remember('post.detail', 60, function() use($post) {
            return $post;
        });
        Redis::zincrby('trend', 1, $post->id);
        Redis::zremrangebyrank('trend', 0, -6);
        $views = Redis::incr("post.{$post->id}.views");
        return view('post', [
            'title' => 'Single Post',
            'active' => 'blog',
            'post' => $posts,
            'categories' => $category,
            'studies' => $study,
            'locations' => $location,
            'views' => $views
        ]);
    }
}
