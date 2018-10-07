<div class="alert alert-{{ $color }}" role="alert">
    <div class="media">
        @isset($icon)
            <i class="{{ $icon }} fa-3x fa-fw mr-3"></i>
        @endisset
        <div class="media-body">
            <h4 class="alert-heading">{{ $header }}</h4>
            {{ $slot }}
        </div>
    </div>
    <hr>
    @if (isset($footer))
        {{ $footer }}
    @else
        <p class="mb-0 text-center">{{ config('app.name') }} <a href="{{ url('/') }}">{{ url('/') }}</a></p>
    @endif
</div>
