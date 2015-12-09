<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                @foreach ($shopList as $shop)
                    {{$shop['name']}}<br />
                    {{$shop['addr']}}<br />
                    {{$shop['phone']}}<br />
                    <hr />
                @endforeach
            </div>
        </div>
    </body>
</html>
