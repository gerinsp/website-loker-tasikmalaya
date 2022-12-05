<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\ComunityPost;
use App\Models\ComunityUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserComunityController extends Controller
{
    public function index()
    {

    }

    public function comunity(User $user, Comunity $comunity)
    {
        return view('usercomunity.index', [
            'title' => 'Komunitas Saya',
            'active' => 'comunity',
            // 'usercomunities' => UserComunity::where('user_id', auth()->user()->id)->get(),
            // 'usercom' => UserComunity::where('comunity_id', auth()->user()->comunity->id)->get(),
            'comunities' => Comunity::all(),
            'comunityUsers' => ComunityUser::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function post(User $user)
    {
        return view('usercomunity.post', [
            'title' => 'Postingan Saya',
            'active' => 'comunity',
            'comunityPosts' => ComunityPost::where('user_id', $user->id)->get()
        ]);
    }
}
