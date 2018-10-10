<?php

namespace App\Http\Controllers\Admin;

use App\ArtistTag;
use App\ArtistTagcat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtistTagRequest;

class ArtistTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('FormInputRemoveEol:name')->only(['store', 'update']);
        $this->middleware('FormInputSingleSpace:name')->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $artistTagcats = ArtistTagcat::with('artistTags.artists')->get(); // 將來整合 artists
        $artistTagcats = ArtistTagcat::with('artistTags')->get();
        return view('admin.artist_tags.index', compact('artistTagcats'));
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
     * @param  StoreArtistTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtistTagRequest $request)
    {
        ArtistTag::create($request->all());
        return redirect()->route('admin.artist_tags.index', '#tagcatid_' . $request->artist_tagcat_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArtistTag  $artistTag
     * @return \Illuminate\Http\Response
     */
    public function show(ArtistTag $artistTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArtistTag  $artistTag
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtistTag $artistTag)
    {
        return view('admin.artist_tags.edit', compact('artistTag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreArtistTagRequest  $request
     * @param  \App\ArtistTag  $artistTag
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArtistTagRequest $request, ArtistTag $artistTag)
    {
        $artistTag->update($request->all());
        return redirect()->route('admin.artist_tags.edit', $artistTag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArtistTag  $artistTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtistTag $artistTag)
    {
        // 將來要整合 artists
        // 防止刪除此標籤，如果有藝人正在使用此標籤
        // if ($artistTag->artists->count())
        // {
        //     return back();
        // }

        $artistTag->delete();
        return redirect()->route('admin.artist_tags.index');
    }
}
