@extends('layouts.master')

@section('page_title', '測試 - 首頁')

@section('master_sidebar')
    @include('test_views.sidebar')
    @parent
@endsection

@section('content')
test_views/index.blade.php
@endsection
