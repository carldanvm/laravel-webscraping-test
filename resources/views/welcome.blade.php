<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Steam profile tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">


  
    <div class="container shadow-lg bg-white">

        <h1>Steam profile tracker</h1>
        <br>
        <h3>{{ $datos['name'] }}</h3>



        <p> <img src="{{ $datos['img'] }}" alt=""> {{ $datos['pais'] }}</p>

        <h3>Amigos {{$datos['amigos']}}</h3>

        <br>
        <h3>
            Horas jugadas en las ultimas 2 semanas: {{ $datos['horas'] }}
        </h3>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
