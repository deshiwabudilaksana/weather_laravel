<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Forecast</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <header>
                    <h2 class="text-center">Weather Forecast</h2>
                    <nav>
                        <a href="/weather">Home</a>
                        |
                        <a href="/weather/forecast">Forecast</a>
                        |
                        <a href="/weather/recent">Recent Weather</a>
                    </nav>
                </header>
                
            </div>
                <hr>


                <!-- bagian judul halaman -->

                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <h3 class="text-center">@yield('judul_halaman')</h3>
                </div>
                <div class="col-md-4">

                </div>
                


                <!-- bagian konten -->
                @yield('konten')
        </div>
        
    </div>
    
    

    <br>
    <br>
    <hr>
    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          /* background-color: red; */
          color: black;
          text-align: center;
        }
    </style>
    <footer class="footer">
        <p>&copy; <a href="#">Bulgogi23</a>. 2020</p>
    </footer>

</body>
</html>