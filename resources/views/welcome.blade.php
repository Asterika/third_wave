<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Third Wave</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: flex-start;
                display: flex;
                justify-content: center;
            }

            hr {
            /* display: block; */
            /* height: 1px; */
            border: 0;
            /* border-top: 1px solid #ccc; */
            /* margin: 0.65em 0; */
            padding: 0;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
/*
            #rotate-text {
              transform: rotate(5deg);
            } */

            .title {
                font-size: 60px;
            }
            .title-small {
                font-size: 45px;
            }

            .links > a {
                /* color: #63AF86; */
                /* align: center; */
                color: #636b6f;
                padding: 0 5%;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                /* padding-left: 5%;
                padding-top: 0.5%; */
                /* margin-left: 1.5%; */
                text-decoration: none;
                text-transform: uppercase;
            }

            a:hover {
              /* color: #4286f4; */
              color: #63AF86;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <!-- <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
          <br /> -->
            <div class="content">
              @if (Route::has('login'))
                <div class="links">
                  @auth
                    <a href="{{ url('/home') }}">Logout</a>
                  @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                      <a href="{{ route('register')}}">Register</a>
                    @endif
                  @endauth
                </div>
              @endif

              </div>
                <div class="title" style="text-align:center;">
                    Third Wave <div class="title-small" style="display:inline; text-align: center;">Coffee</div>
                </div>

              <div id="nav">
                <div class="links">
                  <!-- style="margin-top:1.5%; margin-bottom:2%; -->
                    <a href="/about">What is Third Wave?</a>
                    <a href="/lingo">Lingo</a>
                    <a href="/brew">Brew</a>
                    <a href="/locate">Locate</a>
                    <a href="/shops">Shops</a>
                </div>
              </div>

                <div>
                  <img class="img-responsive" alt="Barista Pouring Lattes | Photo by Tyler Nix on Unsplash" src="/images/pouring_lattes.jpg"
                   style="width:100%; height:400px; object-fit:cover; opacity:0.8;">

                    <!-- margin-top:-1.2%; -->
                </div>
            </div>
    </body>
</html>
