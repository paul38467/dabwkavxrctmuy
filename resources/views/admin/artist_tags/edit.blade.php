@extends('layouts.master')

@section('page_title', '管理 - 藝人的標籤')

@section('master_sidebar')
    @include('admin.sidebar')
    @parent
@endsection

@section('content')
<h5 class="py-3">管理 - 藝人的標籤</h5>

@component('components.common_edit_delete')
    @slot('header_edit', '編輯標籤')
    @slot('header_delete', '刪除標籤')
{{--
    將來要整合 artists
    @slot('data_total', $artistTag->artists->count())
 --}}
    @slot('data_total', 0)
    @slot('url_back', route_uri('admin.artist_tags.index'))
    @slot('action_update', route_uri('admin.artist_tags.update', $artistTag))
    @slot('action_delete', route_uri('admin.artist_tags.destroy', $artistTag))

    <input type="hidden" name="artist_tagcat_id" value="{{ $artistTag->artist_tagcat_id }}">
    <label for="artistTagName">標籤 ID: {{ $artistTag->id }}</label>
    <input type="text" id="artistTagName" name="name" value="{{ old('name', $artistTag->name) }}" class="form-control ml-2" placeholder="輸入標籤名稱" aria-label="輸入標籤名稱">
@endcomponent
@endsection
