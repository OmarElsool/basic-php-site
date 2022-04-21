<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Photo Gallary</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#nature">Nature</a>
                    <a class="dropdown-item" href="#architecture">Architecture</a>
                    <a class="dropdown-item" href="#travel">Travel</a>
                </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
            </li>
        </ul>
    </div>
    </nav>
    <!-- Nav Bar -->
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/nature1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3>Nature</h3>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/arch1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3>Architecture</h3>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/travel1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h3>Travel</h3>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
    </div>
    <!-- Carousel -->
    
    <!-- section -->
    <section class="my-4" id="nature">
        <div class="py-4">
            <h2 class="text-center">Nature</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/nature2.jpg" alt="..." class="img-fluid pd-3">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/nature3.jpg" alt="..." class="img-fluid pd-3">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/nature2.jpg" alt="..." class="img-fluid pd-3">
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
        <!-- section -->
        <section class="my-4" id="architecture">
        <div class="py-4">
            <h2 class="text-center">Architecture</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/arch2.jpg" alt="..." class="img-fluid pd-3">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/arch2.jpg" alt="..." class="img-fluid pd-3">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/arch2.jpg" alt="..." class="img-fluid pd-3">
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
    <!-- section -->
    <section class="my-4" id="travel">
        <div class="py-4">
            <h2 class="text-center">Travel</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/travel2.jpg" alt="..." class="img-fluid pd-3">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/travel2.jpg" alt="..." class="img-fluid pd-3">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="images/travel2.jpg" alt="..." class="img-fluid pd-3">
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
    <hr>
    <!-- section -->
    <section class="my-4" id="contact">
        <div class="py-4">
            <h2 class="text-center">Contact Us</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name" name="name">
                </div>
                <div class="form-group">
                    <label label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email" name="email">
                </div>
                <div class="form-group">
                    <label label for="Number">Number</label>
                    <input type="text" class="form-control" id="Number" name="number">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <hr>
    <!-- section -->
    <section class="my-4" id="about">
        <div class="py-4">
            <h2 class="text-center">About</h2>
        </div>
        <div class="container-fluid">
            <h3 class="text-center">Noname</h3>
            <p class="text-center">any text to fill any text to fill any text to fill any text to fill any text to fill any text to fill any text to fill </p>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
</body>
</html>