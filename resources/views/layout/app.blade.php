<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="img/yy.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">
        @yield('content')
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/yy.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/aboutme">About Me</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/project">Project</a></li>
                    
                </ul>
            </div>
        </nav>
        
        
        <main class="fluid-container mt-4">
    </main>
    <footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <!-- Social Media Icons Section -->
            <div class="col-md-4 mb-3 d-flex justify-content-center">
                <a class="social-icon mx-2" href="https://wa.me//+628977753774">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a class="social-icon mx-2" href="https://www.facebook.com/profile.php?id=100061667333427&mibextid=ZbWKwL">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
            </div>
            <!-- Copyright Section -->
            <div class="col-md-4 mb-3">
                <p>&copy; 2024 Rizki Aditia Pratama</p>
            </div>
            <!-- Navigation Links Section -->
            <div class="col-md-4 d-flex justify-content-center">
                <a href="{{ url('/about') }}" class="text-white mx-2">About Me</a>
                |
                <a href="{{ url('/projects') }}" class="text-white mx-2">Projects</a>
                |
                <a href="{{ url('/home') }}" class="text-white mx-2">Home</a>
                
                

            </div>
        </div>
    </div>
</footer>

        
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>