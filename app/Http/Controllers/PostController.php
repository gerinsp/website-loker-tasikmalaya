<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        } elseif(request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = 'By ' . $user->name;
        }
        
        return view('blog', [
            'title' => 'Cari Loker ' . $title,
            'active' => 'blog',
            'post' => Post::where('pinned', 'no')->latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString(),
            'categories' => Category::all(),
            'studies' => Study::all(),
            'locations' => Location::all(),
            'pinned' => Post::where('pinned', 'pin')->get()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'blog',
            'post' => $post,
            'categories' => Category::all(),
            'studies' => Study::all(),
            'locations' => Location::all()
        ]);
    }
}
