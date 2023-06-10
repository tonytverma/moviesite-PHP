<?php require_once 'ti.php' ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php startblock('title') ?>
    <?php endblock() ?> | movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<style>
    .innerbox {
        border: 2px solid black;
    }

    .footer {
        display: flex;
    }

    .boxes {
        height: 30vh;
        width: 50vw;
        background-color: aqua;
        /* border: 2px solid black; */
        display: flex;
        flex-flow: column;
        justify-content: space-around;
        text-align: center;
        align-items: center;
    }

    .boxs {
        height: 30vh;
        width: 50vw;
        background-color: aqua;
        /* border: 2px solid black; */
        text-align: center;
    }
    .card{
        height: 50vh;
    }
    .align-content-center {
        margin-top: -8px;
        color: white;
    }

    .navbar-brand,
    .nav-link,
    .dropdown-item {
        color: white;
    }

    .navbar-brand:hover,
    .nav-link:hover {
        color: aqua;
    }

    .button {
        border-radius: 23px;
        background-color: black;
        color: red;
    }

    .dropdown-item:hover {
        color: aqua;
        background-color: black;
    }
</style>

<body style="background: #000;">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">T-movies</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">x
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="movie.php">movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="anime.php">Anime</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Anime list
                        </a>
                        <ul class="dropdown-menu bg-black" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="animeitem.php?anime_id=1">Naruto</a></li>
                            <li><a class="dropdown-item" href="animeitem.php?anime_id=9">one piece</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="anime.php">all animes</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" action="search.php" method="post" role="search">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php startblock('body') ?>
    <?php endblock() ?>
    <footer class="bg-dark text-center text-white pt-4">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-facebook-f"></i>f</a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i>A</a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i>git</a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram">Y</i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in">S</i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <b>Home page:</b>
            <a class="text-white" href="home.php">HOME.com</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

</body>
</html>