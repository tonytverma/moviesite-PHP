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

    $sql = "select * from `moviesite`";

    $movies = $conn->query($sql);
?>
<?php startblock('title') ?>
   movie
<?php endblock() ?>
<?php startblock('body') ?>
<div class="album py-5 bg-black">
    <div class="container bg-black">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 bg-dark">
            <?php 
            while($row = $movies->fetch_assoc()) {
                echo ('<div class="col bg-secondary bg-dark"  >
                    <div class="card shadow-sm bg-dark">
                        <img src="' . $row["filepic"]  . '"
                            width="100%" height="225" alt="">
                        <div class="card-body">
                            <p class="card-text text-dark">
                                <a class="text-light" id="movieid" style="font-family: \'Caveat\', cursive; text-decoration: none;"  href="movieitem.php?movie_id=' . $row['mive_id'] . '">' . $row["movie_name"] . ' </a>
                            </p>    
                            </div>
                            </div>
                        </div>');
                }
            ?>
        </div>
    </div>
</div>
<?php endblock() ?>