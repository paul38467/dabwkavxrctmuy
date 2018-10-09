<div class="container w-50">
    <div class="card mb-3">
        <h5 class="card-header text-center">{{ $header_edit }}</h5>
        <div class="card-body">
            @includeWhen($errors->any(), 'layouts.blocks.errors', ['errs' => $errors->all()])

            <div class="d-flex justify-content-center">
                <form class="form-inline" method="POST" action="{{ $action_update }}">
                    @method('PATCH')
                    @csrf

                    <div class="form-group">
                        {{ $slot }}
                    </div>
                    <button type="submit" class="btn btn-success ml-2" data-disable-on-click>儲存</button>
                    <a class="btn btn-primary ml-2" href="{{ $url_back }}" role="button">返回</a>
                </form>
            </div>
        </div><!-- /.card-body -->
    </div><!-- /.card -->

    <div class="card">
        <h5 class="card-header text-center">{{ $header_delete }}</h5>
        <div class="card-body text-center">
            @if ($data_total)
                <div class="alert alert-danger" role="alert">
                    不允許刪除，因為存在 {{ number_format($data_total) }} 筆資料。
                </div>
            @endif

            <form method="POST" action="{{ $action_delete }}">
                @method('DELETE')
                @csrf

                <button type="submit" class="btn btn-danger"{{ ($data_total) ? ' disabled' : '' }} data-disable-on-click>刪除</button>
            </form>
        </div><!-- /.card-body -->
    </div><!-- /.card -->
</div><!-- /.container -->
