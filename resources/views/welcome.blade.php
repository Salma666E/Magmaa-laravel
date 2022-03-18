<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
          

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300);
@import url(https://fonts.googleapis.com/css?family=Squada+One);
body {
  padding: 20px 80px;
  background: #eee url(https://subtlepatterns.com/patterns/extra_clean_paper.png);
  
               
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
}
#logo {
  font-family: 'Open Sans', sans-serif;
  color: #555;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 150px;
  font-weight: 800;
  letter-spacing: -3px;
  line-height: 1;
  text-shadow: #EDEDED 3px 2px 0;
  position: relative;
}
#logo:after {
  content:"اتمنى ان تكون مستمتع معنا    ";
  position: absolute;
  left: 8px;
  top: 32px;
}
#logo:after {
  /*background: url(https://subtlepatterns.com/patterns/crossed_stripes.png) repeat;*/
  background-image: -webkit-linear-gradient(left top, transparent 0%, transparent 25%, #555 25%, #555 50%, transparent 50%, transparent 75%, #555 75%);
  background-size: 4px 4px;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  z-index: -5;
  display: block;
  text-shadow: none;
}
#menu {
  width: 1090px;
  height: 42px;
  list-style: none;
  margin: 10px 0 0 0; padding: 25px 10px;
  border-top: 4px double #AAA;
  border-bottom: 4px double #AAA;
  position: relative;
  text-align: center;
}
#menu li {
  display: inline-block;
  width: 173px;
  margin: 0 10px;
  position: relative;
  -webkit-transform: skewy(-3deg);
  -webkit-backface-visibility: hidden;
  -webkit-transition: 200ms all;
}
#menu li a {
  text-transform: uppercase;
  font-family: 'Squada One', cursive;
  font-weight: 800;
  display: block;
  background: #FFF;
  padding: 2px 10px;
  color: #333;
  font-size: 35px;
  text-align: center;
  text-decoration: none;
  position: relative;
  z-index: 1;
  text-shadow: 
		1px 1px 0px #FFF, 
		2px 2px 0px #999,
		3px 3px 0px #FFF;
	background-image: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,.05) 100%);
	-webkit-transition: 1s all;
	background-image: -webkit-linear-gradient(left top, 
		transparent 0%, transparent 25%, 
		rgba(0,0,0,.15) 25%, rgba(0,0,0,.15) 50%, 
		transparent 50%, transparent 75%, 
		rgba(0,0,0,.15) 75%);
  background-size: 4px 4px;
	box-shadow: 
		0 0 0 1px rgba(0,0,0,.4) inset, 
		0 0 20px -5px rgba(0,0,0,.4),
		0 0 0px 3px #FFF inset;
}
#menu li:hover {
	width: 203px;
	margin: 0 -5px;
}
#menu a:hover {
  color: #d90075;
}
#menu li:after,
#menu li:before {
  content: '';
  position: absolute;
  width: 50px;
  height: 100%;
  background: #BBB;
  -webkit-transform: skewY(8deg);
  x-index: -3;
	border-radius: 4px;
}
#menu li:after {
	background-image: -webkit-linear-gradient(left, transparent 0%, rgba(0,0,0,.4) 100%);
  right: 0;
  top: -4px; 
}
#menu li:before {
  left: 0;
  bottom: -4px;
	background-image: -webkit-linear-gradient(right, transparent 0%, rgba(0,0,0,.4) 100%);
}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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

            <div class="content">
            <div id="header">
  <a id="logo"> اتمنى ان تكون مستمتع معنا</a>
  <ul id="menu">
    <li><a href="/"><span>.......</span></a></li>
    <li><a href="/UserHome"><span>User</span></a></li>
    <li><a href="/"><span>.......</span></a></li>
    <li><a href="/AdminHome"><span>Admin</span></a></li>
    <li><a href="/"><span>........</span></a></li>
  </ul>
</div>

              
            </div>
        </div>
    </body>
</html>
