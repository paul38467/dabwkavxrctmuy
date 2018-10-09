@extends('layouts.master')

@section('page_title', '管理 - 地區')

@section('master_sidebar')
    @include('admin.sidebar')
    @parent
@endsection

@section('content')
<h5 class="py-3">管理 - 地區</h5>
@includeWhen($errors->any(), 'layouts.blocks.errors', ['errs' => $errors->all()])

<form method="POST" action="{{ route_uri('admin.regions.store') }}">
    @csrf

    <div class="form-row align-items-center mb-3">
        <div class="col-auto">
            <label class="sr-only" for="regionName">輸入地區名稱</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">新增地區</div>
                </div>
                <input type="text" id="regionName" name="name" value="{{ old('name') }}" class="form-control" placeholder="輸入地區名稱">
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary" data-disable-on-click>新增</button>
        </div>
    </div>
</form>

@if (count($regions))
    <table class="table table-sm table-hover table-bordered bg-light">
        <thead class="table-success">
            <tr>
                <th class="col-md-1" scope="col">地區 ID</th>
                <th class="col-md-6" scope="col">地區名稱</th>
                <th class="col-md-1 text-center" scope="col">藝人數量</th>
                <th class="col-md-1 text-center" scope="col">AV 數量</th>
                <th class="col-md-1 text-center" scope="col">電影數量</th>
                <th class="col-md-1 text-center" scope="col">總數量</th>
                <th class="col-md-1 text-center" scope="col">管理</th>
            </tr>
        </thead>
        <tbody>
            @foreach($regions as $region)
                <tr>
                    <th scope="row">{{ $region->id }}</th>
                    <td><i class="fas fa-flag fa-fw text-success"></i> {{ $region->name }}</td>
{{--
                    將來要整合各相關項目資料數目
                    <td class="text-right">{{ number_format($region->artist_total) }}</td>
                    <td class="text-right">{{ number_format($region->av_total) }}</td>
                    <td class="text-right">{{ number_format($region->movie_total) }}</td>
                    <td class="text-right text-danger">{{ number_format($region->category_data_total) }}</td>
 --}}
                    <td class="text-right">0</td>
                    <td class="text-right">0</td>
                    <td class="text-right">0</td>
                    <td class="text-right text-danger">0</td>
                    <td class="text-center">
                        <a class="btn btn-primary btn-sm" href="{{ route_uri('admin.regions.edit', $region) }}">
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
