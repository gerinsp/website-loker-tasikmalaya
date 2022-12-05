<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\ComunityPost;
use App\Models\ComunityUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserComunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserComunity  $userComunity
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Comunity $comunity)
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
            'comnityPosts' => ComunityPost::where('user_id', $user->id)->get()
        ]);
    }

    /*
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserComunity  $userComunity
     * @return \Illuminate\Http\Response
     */
    public function edit(UserComunity $userComunity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserComunity  $userComunity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserComunity $userComunity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserComunity  $userComunity
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserComunity $userComunity)
    {
        //
    }
}
