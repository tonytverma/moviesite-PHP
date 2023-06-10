<?php include 'base.php'?>
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "movies";
    $conn = new mysqli($servername, $username, $password,$database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST["search"];
        $sql = "SELECT * FROM `animesite` WHERE anime_name LIKE '%".$search."%'";   
        $animes = $conn->query($sql);
        $sql = "SELECT * FROM `moviesite` WHERE movie_name LIKE '%".$search."%'";   
      $movies = $conn->query($sql);
      }
    else {
        $sql = "select * from `animesite`";
        $sql2 = "select * from `moviesite`";
        $animes = $conn->query($sql);
        $movies = $conn->query($sql2);  
    }
    // while($row = $animes->fetch_assoc()) {
    //     echo "id: " . $row["anime_id"]. " - Name: " . $row["anime_name"]. " " . $row["anime_dec"]. "<br>";
    //   }
?>
<?php startblock('title') ?>
home page
<?php endblock() ?>
<?php startblock('body') ?>
<div class="album p-4 bg-black d-flex">
    <div class="album py-5 bg-black d-flex flex-column">
        <?php
            if (mysqli_num_rows($movies)>0) {
                
                echo '<div class="movie  bg-dark m-1">
                    <h1 style="color: white; font-family: "Caveat", cursive;">movies</h1>
                </div>';
            }
        ?>
        <div class="container bg-black">
            <div class="row row-cols-1 row-cols-sm-2 g-3 bg-dark">
            <?php 
            while($row = $movies->fetch_assoc()) {
            echo ('<div class="col bg-dark"  >
                <div class="card shadow-sm bg-dark">
                    <a href="#"></a>
                    <img src="' . $row["filepic"]  . '"
                        width="100%" height="225" alt="">
                    <div class="card-body">
                        <p class="card-text text-dark">
                            <a class="text-light" id="movieid" style="font-family: \'Caveat\', cursive; text-decoration: none;"  href="movieitem.php?movie_id=' . $row['mive_id'] . '">' . $row["movie_name"] . ' </a>
                        </p>    
                        </div>
                        </div>
                    </div>') ;
            }
            ?>
            </div>
        </div>
    </div>
    <div class="album py-5 bg-black d-flex flex-column">
        <?php
          if (mysqli_num_rows($animes)>0) {
             echo '<div class="movie  bg-dark m-1">
                  <h1 style="color: white; font-family: "Caveat", cursive;">anime</h1>
              </div>';
          }
        ?>
        <div class="container bg-black">

            <div class="row row-cols-1 row-cols-sm-2 g-3 bg-dark">
                <?php 
            while($row = $animes->fetch_assoc()) {

            echo ('<div class="col bg-dark"  >
                    <a href="#">
                    <div class="card shadow-sm bg-dark">
                        <img src="' . $row["filepic"]  . '" 
                            width="100%" height="225" alt="">
                        <div class="card-body">
                            <p class="card-text text-primary">
                            <a class="text-light" id="movieid" style="font-family: \'Caveat\', cursive; text-decoration: none;"  href="animeitem.php?anime_id=' . $row['anime_id'] . '">' . $row["anime_name"] ."<br>". $row["anime_dec"] . ' </a>
                            </p>
                        </div>
                    </div>
                </a>
                </div>') ;
            }
            ?>
            </div>
        </div>
    </div>
</div>
<?php endblock() ?>