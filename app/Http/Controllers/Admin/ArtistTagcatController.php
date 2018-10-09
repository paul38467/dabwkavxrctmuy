<?php

namespace App\Http\Controllers\Admin;

use App\ArtistTagcat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArtistTagcatRequest;

class ArtistTagcatController extends Controller
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
        // $artistTagcats = ArtistTagcat::withCount('artistTags')->get(); // 將來整合 artistTags
        $artistTagcats = ArtistTagcat::all();
        return view('admin.artist_tagcats.index', compact('artistTagcats'));
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
     * @param  StoreArtistTagcatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtistTagcatRequest $request)
    {
        ArtistTagcat::create($request->all());
        return redirect()->route('admin.artist_tagcats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArtistTagcat  $artistTagcat
     * @return \Illuminate\Http\Response
     */
    public function show(ArtistTagcat $artistTagcat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArtistTagcat  $artistTagcat
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtistTagcat $artistTagcat)
    {
        return view('admin.artist_tagcats.edit', compact('artistTagcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreArtistTagcatRequest  $request
     * @param  \App\ArtistTagcat  $artistTagcat
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArtistTagcatRequest $request, ArtistTagcat $artistTagcat)
    {
        $artistTagcat->update($request->all());
        return redirect()->route('admin.artist_tagcats.edit', $artistTagcat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArtistTagcat  $artistTagcat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtistTagcat $artistTagcat)
    {
        // 防止刪除有標籤的分類
        // if ($artistTagcat->artistTags->count())
        // {
        //     return back();
        // }

        $artistTagcat->delete();
        return redirect()->route('admin.artist_tagcats.index');
    }
}
