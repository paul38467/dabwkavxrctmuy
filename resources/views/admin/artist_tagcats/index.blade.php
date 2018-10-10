@extends('layouts.master')

@section('page_title', '管理 - 藝人的標籤分類')

@section('master_sidebar')
    @include('admin.sidebar')
    @parent
@endsection

@section('content')
<h5 class="py-3">管理 - 藝人的標籤分類</h5>
@includeWhen($errors->any(), 'layouts.blocks.errors', ['errs' => $errors->all()])

<form method="POST" action="{{ route_uri('admin.artist_tagcats.store') }}">
    @csrf

    <div class="form-row align-items-center mb-3">
        <div class="col-auto">
            <label class="sr-only" for="artistTagcatName">輸入分類名稱</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">新增分類</div>
                </div>
                <input type="text" id="artistTagcatName" name="name" value="{{ old('name') }}" class="form-control" placeholder="輸入分類名稱">
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary" data-disable-on-click>新增</button>
        </div>
    </div>
</form>

@if (count($artistTagcats))
    <table class="table table-sm table-hover table-bordered bg-light">
        <thead class="table-success">
            <tr>
                <th class="col-md-1" scope="col">分類 ID</th>
                <th class="col-md-9" scope="col">分類名稱</th>
                <th class="col-md-1 text-center" scope="col">標籤數量</th>
                <th class="col-md-1 text-center" scope="col">管理</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artistTagcats as $artistTagcat)
                <tr>
                    <th scope="row">{{ $artistTagcat->id }}</th>
                    <td><i class="fas fa-tags fa-fw text-success"></i> {{ $artistTagcat->name }}</td>
                    <td class="text-right text-danger">{{ number_format($artistTagcat->artist_tags_count) }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{ route_uri('admin.artist_tagcats.edit', $artistTagcat) }}">
                            <i class="fas fa-pen"></i> 編輯
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    沒有任何相關資料
@endif
@endsection
