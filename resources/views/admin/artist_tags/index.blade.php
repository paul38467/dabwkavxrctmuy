@extends('layouts.master')

@section('page_title', '管理 - 藝人的標籤')

@section('master_sidebar')
    @include('admin.sidebar')
    @parent
@endsection

@section('content')
<h5 class="py-3">管理 - 藝人的標籤</h5>

@if (count($artistTagcats))
    <!-- 快速按鈕 -->
    @foreach ($artistTagcats as $artistTagcat)
        <a class="btn btn-{{ $artistTagcat->artistTags->count() ? 'info' : 'outline-info' }} mr-2" href="#tagcatid_{{ $artistTagcat->id }}" role="button">
            {{ $artistTagcat->name }} ({{ number_format($artistTagcat->artistTags->count()) }})
        </a>
    @endforeach
    <hr>
    @includeWhen($errors->any(), 'layouts.blocks.errors', ['errs' => $errors->all()])

    @foreach ($artistTagcats as $artistTagcat)
        <form method="POST" action="{{ route_uri('admin.artist_tags.store') }}">
            @csrf

            <input type="hidden" name="artist_tagcat_id" value="{{ $artistTagcat->id }}">
            <a class="anchor" id="tagcatid_{{ $artistTagcat->id }}"></a>
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label class="sr-only" for="artistTagName{{ $artistTagcat->id }}">輸入標籤名稱</label>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">{{ $artistTagcat->name }}</div>
                        </div>
                        <input type="text" id="artistTagName{{ $artistTagcat->id }}" name="name" value="" class="form-control" placeholder="輸入標籤名稱">
                    </div>
                </div>
                <div class="col-auto my-3">
                    <button type="submit" class="btn btn-primary" data-disable-on-click>新增</button>
                </div>
            </div>
        </form>

        <table class="table table-sm table-hover table-bordered bg-light mb-5">
            <thead class="table-success">
                <tr>
                    <th class="col-md-1" scope="col">標籤 ID</th>
                    <th class="col-md-1" scope="col">標籤分類</th>
                    <th class="col-md-8" scope="col">標籤名稱</th>
                    <th class="col-md-1 text-center" scope="col">藝人數量</th>
                    <th class="col-md-1 text-center" scope="col">管理</th>
                </tr>
            </thead>
            <tbody>
                @forelse($artistTagcat->artistTags as $artistTag)
                    <tr>
                        <th scope="row">{{ $artistTag->id }}</th>
                        <td>{{ $artistTagcat->name }}</td>
                        <td><i class="fas fa-tag fa-fw text-success"></i> {{ $artistTag->name }}</td>
    {{--
                        將來要整合 artists
                        <td class="text-right text-danger">{{ number_format($artistTag->artists->count()) }}</td>
     --}}
                        <td class="text-right text-danger">0</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm" href="{{ route_uri('admin.artist_tags.edit', $artistTag) }}">
                                <i class="fas fa-pen"></i> 編輯
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">沒有任何標籤</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @endforeach
@else
    要求先新增標籤分類
@endif
@endsection
