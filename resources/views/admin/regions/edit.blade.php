@extends('layouts.master')

@section('page_title', '管理 - 地區')

@section('master_sidebar')
    @include('admin.sidebar')
    @parent
@endsection

@section('content')
<h5 class="py-3">管理 - 地區</h5>

@component('components.common_edit_delete')
    @slot('header_edit', '編輯地區')
    @slot('header_delete', '刪除地區')
{{--
    將來要改為實際資料數目
    @slot('data_total', $region->category_data_total)
 --}}
    @slot('data_total', 0)
    @slot('url_back', route_uri('admin.regions.index'))
    @slot('action_update', route_uri('admin.regions.update', $region))
    @slot('action_delete', route_uri('admin.regions.destroy', $region))

    <label for="regionName">地區 ID: {{ $region->id }}</label>
    <input type="text" id="regionName" name="name" value="{{ old('name', $region->name) }}" class="form-control ml-2" placeholder="輸入地區名稱" aria-label="輸入地區名稱">
@endcomponent
@endsection
