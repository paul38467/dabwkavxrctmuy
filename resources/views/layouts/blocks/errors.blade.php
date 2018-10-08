<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errs as $err)
            <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
