<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        {{ __('welcome') }}
        <div class="flex-center position-ref full-height">
            <form method="post" action="result">
                @csrf

                @foreach($list as $item)
                    <h3>{{ $item->name }}</h3>
                    @foreach($item->answers as $answer)
                        <li>{{ $answer->id }}</li>
                    @endforeach
                @endforeach

                <button type="submit">回答</button>

            </form>
        </div>
    </body>
</html>
