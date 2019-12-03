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
        <div class="flex-center position-ref full-height">
            <form method="post" action="result">
                @csrf
                <h3>Q1</h3>
                <li>answer 1</li>
                <li>answer 2</li>
                <li>answer 3</li>
                <li>answer 4</li>

                <button type="submit">回答</button>

            </form>
        </div>
    </body>
</html>
