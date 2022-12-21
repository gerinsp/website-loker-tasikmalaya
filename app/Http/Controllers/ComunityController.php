<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\ComunityPost;
use App\Models\User;
use App\Http\Requests\StoreComunityRequest;
use App\Http\Requests\UpdateComunityRequest;
use Illuminate\Support\Facades\Cache;

class ComunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunity = Cache::remember('comunity', 60, function(){
            return Comunity::all();
        });
        $comunityPost = Cache::remember('comunity.posts', 60, function(){
            return ComunityPost::all();
        });
        return view('comunity.index', [
            'title' => 'Komunitas',
            'active' => 'comunity',
            'comunities' => $comunity,
            'comunityPosts' => $comunityPost
        ]);
    }

    public function comunity()
    {
        
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
     * @param  \App\Http\Requests\StoreComunityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComunityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function show(Comunity $comunity)
    {
        return view('comunity.comunity', [
            'title' => 'Komunitas',
            'active' => 'comunity',
            'comunity' => $comunity,
            'comunityPosts' => ComunityPost::where('comunity_id', $comunity->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function edit(Comunity $comunity)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComunityRequest  $request
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComunityRequest $request, Comunity $comunity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comunity  $comunity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comunity $comunity)
    {
        //
    }
}
