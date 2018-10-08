<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/plugin/bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        html {
          font-size: 18px;
        }

        body {
          background-image: url("/images/bg.gif");
          background-color: #fff;
          padding-top: 3.5rem;
        }
    </style>

    <title>{{ config('app.name') }} - Error 403</title>
    <link rel="shortcut icon" href="/favicon.ico">
</head>
<body>
    <div class="container">
        @component('components.alert_with')
            @slot('color', 'warning')
            @slot('header', 'Error 403')

            {{ $exception->getMessage() }}
        @endcomponent
    </div>
</body>
</html>
