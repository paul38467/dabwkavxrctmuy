@extends('layouts.master')

@section('page_title', '測試 - my_callout')

@section('master_sidebar')
    @include('test_views.sidebar')
    @parent
@endsection

@section('content')
<div class="container">
    <h3 class="py-3">測試：my_callout</h3>


    <!-- start Example 1: Horizontal Callout -->
    <h4 class="mt-5 text-light bg-secondary">Example 1: Horizontal Callout</h4>
    <p>
        先選擇 color 然後指定為左面的 border<br>
        <code class="highlighter-rouge">my-callout my-callout-primary my-callout-left</code>
    </p>
    <div class="row">
        <div class="col-md">
            <!-- start without icon -->
            <div class="my-callout my-callout-primary my-callout-left">
                <div class="media">
                    <div class="media-body">
                        <h4>primary + border left</h4>
                        <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
                    </div>
                </div>
            </div>
            <!-- end without icon -->
        </div>
        <div class="col-md">
            <!-- start with icon -->
            <div class="my-callout my-callout-success my-callout-left">
                <div class="media">
                    <i class="fas fa-check fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>success + icon + border left</h4>
                        <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
                    </div>
                </div>
            </div>
            <!-- end with icon -->
        </div>
    </div>
    <!-- end Example 1: Horizontal Callout -->



    <!-- start Example 2: Concat Horizontal Callout -->
    <h4 class="mt-5 text-light bg-secondary">Example 2: Concat Horizontal Callout</h4>
    <p>
        用 <code class="highlighter-rouge">my-callout-h-concat</code> 包圍每一個 callout
    </p>
    <div class="d-flex flex-row">
        <div class="my-callout-h-concat">
            <div class="my-callout my-callout-primary my-callout-left">
                <div class="media">
                    <div class="media-body">
                        <h4>Step 1</h4>
                        <p>callout 1</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-callout-h-concat">
            <div class="my-callout my-callout-success my-callout-left">
                <div class="media">
                    <div class="media-body">
                        <h4>Step 2</h4>
                        <p>callout 2 ... Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-callout-h-concat">
            <div class="my-callout my-callout-danger my-callout-left">
                <div class="media">
                    <i class="fas fa-exclamation-circle fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>Step 3</h4>
                        <p>callout 3 ... Consectetur adipiscing elit Integer molestie</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex">
        <div class="flex-fill my-callout-h-concat">
            <div class="my-callout my-callout-primary my-callout-left">
                <div class="media">
                    <i class="fab fa-alipay fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>Step 1</h4>
                        <p>callout 1</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-fill my-callout-h-concat">
            <div class="my-callout my-callout-success my-callout-left">
                <div class="media">
                    <i class="fas fa-check fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>Step 2</h4>
                        <p>callout 2</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-fill my-callout-h-concat">
            <div class="my-callout my-callout-danger my-callout-left">
                <div class="media">
                    <i class="fas fa-exclamation-circle fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>Step 3</h4>
                        <p>callout 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Example 2: Concat Horizontal Callout -->



    <!-- start Example 3: Vertical Callout -->
    <h4 class="mt-5 text-light bg-secondary">Example 3: Vertical Callout</h4>
    <p>
        先選擇 color 然後指定為上面的 border<br>
        <code class="highlighter-rouge">my-callout my-callout-info my-callout-top</code>
    </p>
    <div class="row">
        <div class="col-md">
            <!-- start without icon -->
            <div class="my-callout my-callout-info my-callout-top">
                <div class="media">
                    <div class="media-body">
                        <h4>info + border top</h4>
                        <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
                    </div>
                </div>
            </div>
            <!-- end without icon -->

            <!-- start without icon -->
            <div class="my-callout my-callout-secondary my-callout-top">
                <div class="media">
                    <div class="media-body">
                        <h4>secondary + border top</h4>
                        <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
                    </div>
                </div>
            </div>
            <!-- end without icon -->
        </div>
        <div class="col-md">
            <!-- start with icon -->
            <div class="my-callout my-callout-warning my-callout-top">
                <div class="media">
                    <i class="far fa-hand-paper fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>warning + icon + border top</h4>
                        <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
                    </div>
                </div>
            </div>
            <!-- end with icon -->

            <!-- start with icon -->
            <div class="my-callout my-callout-danger my-callout-top">
                <div class="media">
                    <i class="fas fa-exclamation-circle fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>danger + icon + border top</h4>
                        <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
                    </div>
                </div>
            </div>
            <!-- end with icon -->
        </div>
    </div>
    <!-- end Example 3: Vertical Callout -->



    <!-- start Example 4: Concat Vertical Callout -->
    <h4 class="mt-5 text-light bg-secondary">Example 4: Concat Vertical Callout</h4>
    <p>
        用 <code class="highlighter-rouge">my-callout-v-concat</code> 包圍所有 callout
    </p>
    <div class="row">
        <div class="col-md">

            <div class="my-callout-v-concat">
                <div class="my-callout my-callout-primary my-callout-top">
                    <div class="media">
                        <div class="media-body">
                            <h4>Callout</h4>
                            <p>text</p>
                        </div>
                    </div>
                </div>
                <div class="my-callout my-callout-warning my-callout-top">
                    <div class="media">
                        <div class="media-body">
                            <h4>Callout</h4>
                            <p>text</p>
                        </div>
                    </div>
                </div>
                <div class="my-callout my-callout-danger my-callout-top">
                    <div class="media">
                        <div class="media-body">
                            <h4>Callout</h4>
                            <p>text</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout-v-concat text-center">
                <div class="my-callout my-callout-primary my-callout-top">
                    <div class="media">
                        <div class="media-body">
                            <h5>Callout</h5>
                            <p>text center</p>
                        </div>
                    </div>
                </div>
                <div class="my-callout my-callout-warning my-callout-top">
                    <div class="media">
                        <div class="media-body">
                            <h5>Callout</h5>
                            <p>text center</p>
                        </div>
                    </div>
                </div>
                <div class="my-callout my-callout-danger my-callout-top">
                    <div class="media">
                        <div class="media-body">
                            <h5>Callout</h5>
                            <p>text center</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout-v-concat">
                <div class="my-callout my-callout-primary my-callout-top">
                    <div class="media">
                        <i class="fas fa-check fa-3x fa-fw mr-3"></i>
                        <div class="media-body">
                            <h4>Callout</h4>
                            <p>text</p>
                        </div>
                    </div>
                </div>
                <div class="my-callout my-callout-warning my-callout-top">
                    <div class="media">
                        <i class="fas fa-check fa-3x fa-fw mr-3"></i>
                        <div class="media-body">
                            <h4>Callout</h4>
                            <p>text</p>
                        </div>
                    </div>
                </div>
                <div class="my-callout my-callout-danger my-callout-top">
                    <div class="media">
                        <i class="fas fa-check fa-3x fa-fw mr-3"></i>
                        <div class="media-body">
                            <h4>Callout</h4>
                            <p>text</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout-v-concat">
                <div class="my-callout my-callout-primary my-callout-top">
                    <p class="mb-3"><i class="fas fa-check fa-3x fa-fw"></i></p>
                    <h4>Callout</h4>
                    <p>text</p>
                </div>
                <div class="my-callout my-callout-warning my-callout-top text-center">
                    <p class="mb-3"><i class="fas fa-bell fa-3x fa-fw"></i></p>
                    <h4>Callout</h4>
                    <p>text</p>
                </div>
                <div class="my-callout my-callout-danger my-callout-top text-right">
                    <p class="mb-3"><i class="fas fa-bell fa-2x fa-fw"></i></p>
                    <h4>Callout</h4>
                    <p>text</p>
                </div>
            </div>

        </div>
    </div>
    <!-- end Example 4: Concat Vertical Callout -->



    <!-- start Example 5: Callout Size -->
    <h4 class="mt-5 text-light bg-secondary">Example 5: Callout Size</h4>
    <p>
        附加 <code class="highlighter-rouge">my-callout-sm</code>
    </p>
    <div class="row">
        <div class="col-md">

            <div class="my-callout my-callout-primary my-callout-left my-callout-sm">
                <div class="media">
                    <div class="media-body">
                        <h4>sm</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout my-callout-success my-callout-left my-callout-sm">
                <div class="media">
                    <i class="fas fa-check fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>sm</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout my-callout-info my-callout-top my-callout-sm">
                <div class="media">
                    <div class="media-body">
                        <h4>sm</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout my-callout-danger my-callout-top my-callout-sm">
                <div class="media">
                    <i class="fas fa-exclamation-circle fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>sm</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <p>
        附加 <code class="highlighter-rouge">my-callout-xs</code>
    </p>
    <div class="row">
        <div class="col-md">

            <div class="my-callout my-callout-primary my-callout-left my-callout-xs">
                <div class="media">
                    <div class="media-body">
                        <h4>xs</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout my-callout-success my-callout-left my-callout-xs">
                <div class="media">
                    <i class="fas fa-check fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>xs</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout my-callout-info my-callout-top my-callout-xs">
                <div class="media">
                    <div class="media-body">
                        <h4>xs</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md">

            <div class="my-callout my-callout-danger my-callout-top my-callout-xs">
                <div class="media">
                    <i class="fas fa-exclamation-circle fa-3x fa-fw mr-3"></i>
                    <div class="media-body">
                        <h4>xs</h4>
                        <p>text</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end Example 5: Callout Size -->



    <!-- start Example 6: Callout Colors -->
    <h4 class="mt-5 text-light bg-secondary">Example 6: Callout Colors</h4>
    <p>
        Type Colors
    </p>
    <div class="my-callout my-callout-primary my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>primary</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-secondary my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>secondary</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-success my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>success</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-info my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>info</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-warning my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>warning</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-danger my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>danger</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <p>
        Other Colors
    </p>
    <div class="my-callout my-callout-blue my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>blue</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-indigo my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>indigo</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-purple my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>purple</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-pink my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>pink</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-red my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>red</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-orange my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>orange</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-yellow my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>yellow</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-green my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>green</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-teal my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>teal</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-cyan my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>cyan</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>

    <div class="my-callout my-callout-dark my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>dark</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>
    <!-- start Example 6: Callout Colors -->



    <!-- start Example 7: Callout No Background -->
    <h4 class="mt-5 text-light bg-secondary">Example 7: Callout No Background</h4>
    <p>
        附加 <code class="highlighter-rouge">my-callout-no-bg</code>
    </p>
    <div class="my-callout my-callout-dark my-callout-no-bg my-callout-left">
        <div class="media">
            <i class="fas fa-check fa-3x fa-fw mr-3"></i>
            <div class="media-body">
                <h4>dark</h4>
                <p>Lorem ipsum dolor sit amet Consectetur adipiscing elit Integer molestie lorem at massa</p>
            </div>
        </div>
    </div>
    <!-- end Example 7: Callout No Background -->
</div>
@endsection

@push('master_css_link')

    <!-- my_callout.css -->
    <link rel="stylesheet" href="/my_asset/my_callout.css">

@endpush
