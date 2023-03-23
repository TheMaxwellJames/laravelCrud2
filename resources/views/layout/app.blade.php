<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" 
    integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<div class="container">

    <div class="row my-2">

        <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">

            <div>

                <h2 class="text-primary">
                    @yield('heading')
                </h2>
                
            </div>

            <div>
                <a href="@yield('link')" class="btn btn-primary rounded-pill">@yield('link_text')</a>
            </div>
        </div>


        <hr class="my-2">
        @yield('content')

    </div>


</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js" 
    integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>