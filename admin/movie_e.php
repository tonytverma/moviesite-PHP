<?php
    require 'check.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $search = $_POST["search"];
      $sql = "SELECT * FROM `moviesite` WHERE movie_name LIKE '%".$search."%'";   
      $movies = $conn->query($sql);
    }
    else{
      $sql = "select * from `moviesite`";
      $movies = $conn->query($sql);
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SpringTime</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<body class="bg-secondary">
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
        <li><a href="movie_e.php"  class="active"><span>Movies</span></a></li>
        <li><a href="add_movie.php"><span>add_moive</span></a></li>
        <li><a href="anime_e.php"><span>Animes</span></a></li>
        <li><a href="add_anime.php"><span>add_anime</span></a></li>
        <?php
               if($log){
                            echo '<li><a href="logout.php"><span>Log out</span></a></li>';
                        }
                        else{
                            echo '<li><a href="login.php"><span>Log in</span></a></li>';
                        }
                    ?>
    </ul>
    </div>
    <form class="d-flex p-3" method="post" action="movie_e.php" role="search">
      <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container bg-secondary">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> movies </div>
    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
        <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm text-light">
          <thead>
            <tr>
              <th scope="col">S.no.</th>
              <th scope="col">Movie name</th>
              <th scope="col">Edit option</th>
            </tr>
          </thead>
          <tbody>
           <?php
           while ($row = $movies->fetch_assoc()) { 
            echo '<tr>
            <td>'.$row['mive_id'].'</td>
            <td>'.$row['movie_name'].'</td>
            <td><a href="movie_edit.php?movie_id=' . $row['mive_id'] . '">edit</a></td>
          </tr>';
          }
           ?>
          </tbody>
        </table>
      </div>
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <div id="sidebar">
      </div>
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
    <!-- Main -->
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
