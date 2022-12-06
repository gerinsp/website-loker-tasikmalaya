<?php

namespace App\Http\Controllers;

use App\Models\Comunity;
use App\Models\Comentary;
use App\Models\ComunityPost;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComentaryRequest;
use App\Http\Requests\UpdateComentaryRequest;
use App\Models\ComentReplay;

class ComentaryController extends Controller
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
     * @param  \App\Http\Requests\StoreComentaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComentaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('comentary.index', [
            'title' => 'Komentar',
            'active' => 'comunity',
            'comunityPost' => ComunityPost::find($id),
            'comentaries' => Comentary::where('comunity_post_id', $id)->get(),
            'replays' => ComentReplay::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentary $comentary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComentaryRequest  $request
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComentaryRequest $request, Comentary $comentary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentary  $comentary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentary $comentary)
    {
        //
    }
}
