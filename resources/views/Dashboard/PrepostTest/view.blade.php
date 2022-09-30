{{ $id }}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($pre) ? $pre->test : $post->test }} test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('dist/img/logotm1.png') }}">
</head>

<body class="bg-dark container">

    {{-- pre test --}}

    <div class=" text-center mt-5php artisan make:migration create_flights_table text-light">
        <div class="card-header">
            <h1 style="text-transform: uppercase;"> {{ isset($pre) ? $pre->test : $post->test }} TEST <br>  {{ isset($pre) ? $pre->materi : $post->materi }}</h1>


 

        </div>
        <div class="card-body">
            <h5 class="card-title">Silahkan Scan Code QR Untuk melakukan </h5>
            <p class="card-text mt-4">

                
                <img src="{{ isset($pre) ? URL::asset('dist/img/pretest/' . $id . '.png') : URL::asset('dist/img/posttest/' . $id . '.png') }}" class="img-fluid"
                    width="45%" alt=" {{ isset($pre) ? 'pretest' : 'posttest' }}">
                
                </p>



            <a href=" {{ isset($pre) ? $pre->link : $post->link }}" target="_BLANK" class="btn btn-primary"> {{ isset($pre) ? 'link Pre Test' : 'link Post Test' }}</a>
        </div>
        <div class="card-footer mt-3">
             {{ isset($pre) ? $pre->link : $post->link }}
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
