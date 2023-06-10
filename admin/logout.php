<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        session_start();
        session_unset();
        session_destroy();
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<body class="bg-dark">
    <!-- Header -->
<div class="bg-dark">
  <div class="shell bg-dark">
    <!-- Logo + Top Nav -->
    <div id="top" class="bg-dark">
      <h1><a href="#">Admin panel</a></h1>
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation" class="text-dark">
      <ul>
        <li><a href="movie_e.php"><span>Movies</span></a></li>
        <li><a href="add_movie.php"><span>add_moive</span></a></li>
        <li><a href="anime_e.php"><span>Animes</span></a></li>
        <li><a href="add_anime.php"><span>add_anime</span></a></li>
    </ul>
    </div>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
    <div style="margin-top: 20vh;" class="bg-dark d-flex align-items-center justify-content-center align-middle">
        <form class="login"  method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <div class="bg-dark d-flex justify-content-center flex-column text-light">
                <div class="login2 d-flex justify-content-center mb-1">
                    <!-- <input class="login1" style="margin-left: 4px;" type="button" value="login"> -->
                    <button class="btn text-light bg-black mt-3" type="submit">log out</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
