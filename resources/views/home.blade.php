<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lavaravel Model Controller</title>

    @yield('cdns')

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>

    <main>
        <div class="container">
            <div class="row justify-content-center">

             <!-- CARD -->
            @foreach ($movies as $movie )
            <div class="card border m-3" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $movie['original_title']}}</h4><b>
                        <p class="card-text ">Nationality: {{ $movie['nationality']}}</b></p>
                    <p class="card-text ">Release: {{ $movie['date']}}</p>
                    <p class="card-text ">Rating: {{ $movie['vote']}}</p>
                    <a href="#" class="btn btn-primary">Watch It</a>
                </div>
            </div>
            @endforeach

            </div>
        </div>
    </main>
    
</body>
</html>