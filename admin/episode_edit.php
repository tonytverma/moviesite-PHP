<?php
    require 'check.php';
    $value = FALSE;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anime_name = $_POST["anime_name"];
        $_episode_name = $_POST["episode_name"];
        $_link1 = $_POST["link1"];
        $_link2 = $_POST["link2"];
        $_link3 = $_POST["link3"];
        $sql = "update `".$anime_name."` set link1 = '".$_link1."',link2 = '".$_link2."',link3 = '".$_link3."' WHERE episode_name = '".$_episode_name."'";      
        if($conn->query($sql)){
            $value = TRUE;
        }
        $sql = "select * from `".$anime_name."` where episode_name ='". $_episode_name ."'";
        $episode = $conn->query($sql);
    }
    if (isset($_GET['anime_name'])) {
      $anime_name = $_GET['anime_name'];
      $sql = "select * from `".$_GET['anime_name']."` where episode_no =". $_GET['episode_id'] ."";
      $episode = $conn->query($sql);
    }
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>SpringTime</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

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
                    <li><a href="movie_e.php"><span>Movies</span></a></li>
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
            <!-- End Main Nav -->
        </div>
    </div>
    <?php
        if ($value) {
            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Episode</strong> hav been Edited
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>
    <!-- End Header -->
    <!-- Container -->
    <div id="container bg-secondary">
        <div class="shell">
            <!-- Small Nav -->
            <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> anime|episode|edit </div>
            <!-- Main -->
            <div id="main">
                <div class="cl">&nbsp;</div>
                <!-- Content -->
                <div id="content">
                    <div class="table-responsive">
                        <form method="post" action="episode_edit.php">
                            <?php
                            $row = $episode->fetch_assoc();
                            echo '<label>anime name</label>
                            <div class="pb-2">
                                <input type="text" class="form-control" name="anime_name" value="'.$anime_name.'" readonly>
                            </div>
                            <label>episode name</label>
                            <div class="pb-2">
                                <input type="text" class="form-control" name="episode_name" value="'.$row['episode_name'].'" readonly>
                            </div>
                            <label>download link1</label>
                            <div class="pb-2">
                                <input type="url" class="form-control" name="link1" value="'.$row['link1'].'">
                            </div>
                            <label>download link2</label>
                            <div class="pb-2">
                                <input type="url" class="form-control" name="link2" value="'.$row['link2'].'">
                            </div>
                            <label>download link3 </label>
                            <div class="pb-2">
                                <input type="url" class="form-control" name="link3" value="'.$row['link3'].'">
                            </div>';
                            ?>
                            <button class="btn btn-primary w-100 py-2" type="submit">save changes</button>
                            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
                        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>