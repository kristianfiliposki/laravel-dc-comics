<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fumetti</title>
</head>
<body>
    <div>
        <h1>comics</h1>
        <ul>

            @foreach ($fumetti as $item)
                <li>
                    {{$item->id}}
                    {{$item->titolo}}
                    <div class="box-img">
                        <img src="{{$item->copertina}}" alt="">
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
<style>
    h1{
        color: red;
    }

    .box-img{
        height: 10%;
    };
    img{
        width: 100%;
        height: 100%;
    };


</style>