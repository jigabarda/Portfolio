<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>
    <section class="homepage">
        <header>
            <div class="nav">
                <ul>
                    <li><a href="Home" >Home </a></li>
                    <li><a href="About" >About </a></li>
                    <li><a href="Projects" >Projects </a></li>
                    <li><a href="Services" >Services </a></li>
                    <li><a href="Contact" >Contact </a></li>
                </ul> 
            </div>
        </header>

        <div class="div-container">
            <div class="glass-container">
                <h1>
                    James Ivan Gabarda
                </h1>
                <h4>
                    Web Developer
                </h4>
                <h5>
                    UI/UX Designer
                </h5>
            </div>

            <div class="webtext">
                <h1>WEB DEVELOPER</h1>
            </div>
            
            <div class="container-picture">
                <img src="{{ asset ('img/picture.jpg') }}" alt="Front Image">
            </div>
        </div>
    </section>

</body>
</html>