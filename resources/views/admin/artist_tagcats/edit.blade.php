@extends('layouts.master')

@section('page_title', '管理 - 藝人的標籤分類')

@section('master_sidebar')
    @include('admin.sidebar')
    @parent
@endsection

@section('content')
<h5 class="py-3">管理 - 藝人的標籤分類</h5>

@component('components.common_edit_delete')
    @slot('header_edit', '編輯分類')
    @slot('header_delete', '刪除分類')
{{--
    將來要改為實際資料數目
    @slot('data_total', $artistTagcat->artistTags->count())
 --}}
    @slot('data_total', 0)
    @slot('url_back', route_uri('admin.artist_tagcats.index'))
    @slot('action_update', route_uri('admin.artist_tagcats.update', $artistTagcat))
    @slot('action_delete', route_uri('admin.artist_tagcats.destroy', $artistTagcat))

    <label for="artistTagcatName">分類 ID: {{ $artistTagcat->id }}</label>
    <input type="text" id="artistTagcatName" name="name" value="{{ old('name', $artistTagcat->name) }}" class="form-control ml-2" placeholder="輸入分類名稱" aria-label="輸入分類名稱">
@endcomponent
@endsection
