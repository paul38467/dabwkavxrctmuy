@extends('layouts.master')

@section('page_title', '測試 - alert_with')

@section('master_sidebar')
    @include('test_views.sidebar')
    @parent
@endsection

@section('content')
<div class="container">
    <h3 class="py-3">測試：components.alert_with</h3>

    @component('components.alert_with')
        @slot('color', 'info')
        @slot('header', 'Error 404')

        Test ...... Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit
    @endcomponent

    @component('components.alert_with')
        @slot('color', 'warning')
        @slot('header', 'Error 403')
        @slot('icon', 'far fa-hand-paper')

        Test with icon ...... Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit
    @endcomponent

    @component('components.alert_with')
        @slot('color', 'danger')
        @slot('header', 'Error 500')
        @slot('icon', 'fas fa-exclamation-circle')

        Test with icon ...... Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit
    @endcomponent

    @component('components.alert_with')
        @slot('color', 'success')
        @slot('header', '這是測試標題')
        @slot('footer')
            override default footer
        @endslot

        Test ...... Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit
    @endcomponent

    @component('components.alert_with')
        @slot('color', 'danger')
        @slot('header', 'Error 500')
        @slot('icon', 'fas fa-exclamation-circle')
        @slot('footer')
            override default footer
        @endslot

        Test with icon ...... Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa Facilisis in pretium nisl aliquet Nulla volutpat aliquam velit
    @endcomponent
</div>
@endsection
