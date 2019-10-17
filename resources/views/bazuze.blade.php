<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bazuze</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap" rel="stylesheet">

        <style>
body{
    margin: 0;
    padding: 0;
    min-height: 100vh;
    font-family: 'PT Sans Narrow', sans-serif;
}
/* nav bar setup to float right */
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #44a582;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #eb8715;
}
/* set up view for content*/
section{
    position: absolute;
    width: 100%;
    height: 100%;
    background: #fff;
    display: grid;
    justify-content: center;
    align-items: center;
}
.bannerText{
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translateY(-50%);
    max-width: 700px;

}
/*animate headers*/
.bannerText h2,
.bannerText h3
{
    position: relative;
    margin: 0;
    padding: 0;
    display: inline-block;
    transform-origin: left;
    text-transform: uppercase;
    transform: scaleX(0);
    animation: revealTextReverse 1s ease-in-out forwards;
}
.bannerText h2{
    font-size: 6em;
    animation-delay: 2s;
    color:#eb8715;
}

.bannerText h3{
    font-size: 3em;
    color:#eb8715;
    animation-delay: 3s;
}
.bannerText h2:before,
.bannerText h3:before
{
    content: '';
    position: absolute;
    top:0;
    left: 0;
    background: #44a582;
    width: 100%;
    height: 100%;
    transform-origin: right;
    animation: revealText 1s ease-in-out forwards;
    animation-delay: 3s;
}
.bannerText h3:before{
    animation-delay: 4s;
}
@keyframes revealText{
0%{
    transform: scaleX(1)
}
100%{
    transform: scaleX(0)
}
}
@keyframes revealTextReverse{
    0%{
        transform: scaleX(0);

    }
    100%{
        transform: scaleX(1);
    }
}
.bannerText p{
    opacity: 0;
    font-weight: 400;
    font-size: 1.2em;
    animation: fadeIn 1s linear forwards;
    animation-delay: 5s;
}
@keyframes fadeIn{
    0%{
        opacity: 0;
    }
    100%{
        opacity:1;
    }
}
.bannerText a{
    opacity: 0;
    display: inline-block;
    margin: 20px 0 0;
    padding: 10px 20px;
    background:#000;
    color: #fff;
    font-weight: 700;
    text-decoration: none;
    font-size: 1.2em;
    letter-spacing: 1px;
    animation: fadeInBottom 0.5s linear forwards;
    animation-delay: 5.5s; 
}
@keyframes fadeInBottom{
    0%{
          transform: translateY(50px);
          opacity: 0;
    }
    100%{
        transform: translateY(0px);
        opacity: 1;
    }
}
.bazuze-logo{
    opacity: 0;
    position: absolute;
    right: 10%;
    top: 50%;
    transform: translateY(-50%);
    animation: fadeIn 1s    linear forwards;
    animation-delay: 6s;
}
</style>
    </head>
    <body>
                <nav>
                <ul>
                   <li><a class="active" href="#home">Home</a></li>
                   <li><a>Login</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about">About</a></li>
                    <li>
                       @if (Route::has('login'))
                  <li >
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                    @else
                        <li>
                        <a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                           <li> 
                           <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                
            @endif
                    </li>
                </ul>
            </nav>
    <section>
        <div class="bannerText">
            <h2>bazuze</h2><br/>
            <h3>They Farm, we Trade, you Earn</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
            aliqua. Rhoncus dolor purus non enim. Nisl tincidunt eget nullam non. Sit amet purus gravida quis blandit turpis cursus.
            Dolor sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. In pellentesque massa placerat duis ultricies
            lacus sed turpis. Velit scelerisque in dictum non consectetur a. Tincidunt id aliquet risus feugiat in. At urna
            condimentum mattis pellentesque. In hac habitasse platea dictumst quisque sagittis purus. Amet purus gravida quis
            blandit turpis cursus in hac habitasse. Molestie ac feugiat sed lectus. Sit amet dictum sit amet justo donec. Natoque
            penatibus et magnis dis. Quisque sagittis purus sit amet volutpat consequat. Orci sagittis eu volutpat odio facilisis
            mauris. Duis at tellus at urna condimentum mattis pellentesque id nibh.
       </p>
        <a href="#">Read More ..</a>
        </div>
        <img src="bazuze1.png" class="bazuze-logo">
    </section>
    </body>
</html>
