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
 
     $sql = "select * from `moviesite` WHERE mive_id = " . $_GET['movie_id'] ."";
     $movies = $conn->query($sql);
     while($row = $movies->fetch_assoc()){ 
        $Name = $row["movie_name"];
        $filepic = $row['filepic'];
     }
?>
<?php startblock('title') ?>
<?php echo $Name; ?>
<?php endblock() ?>

<?php startblock('body') ?>
<div class="align-content-center bg-black" style="margin-bottom: -8px; padding:10px;">
    <div class="container bg-dark  my-2 rounded-3">
        <div class="row">
            <div class="col align-self-start text-xl-center " style="padding-top: 10px;">
                <div class="card bg-secondary" style="width: 18rem;">
                    <img src="<?php echo $filepic ?>" height="100%" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                    </div>
                </div>
                <div class="col align-self-center bg-dark my-2 rounded-2">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Voluptate iure recusandae
                    explicabo, atque hic dolor eos ad iste praesentium nisi? Beatae mollitia porro adipisci?
                    Exercitationem
                    cumque tempora, quisquam ex accusantium culpa necessitatibus laboriosam corporis aliquid, quo,
                    maiores
                    reprehenderit voluptatibus. Dolorum, vitae eum, maxime eveniet possimus labore molestias provident
                    recusandae aspernatur, modi exercitationem beatae error inventore ratione deserunt praesentium
                    soluta
                    corporis repellat accusamus commodi voluptas. Eveniet cumque ut perferendis neque totam facilis hic
                    eos,
                    fugiat voluptatum officiis assumenda porro ullam impedit minima aperiam reiciendis aspernatur
                    distinctio
                    ipsum incidunt. Dolorem sint repellendus qui, voluptates tenetur omnis, aspernatur vel ipsum aliquam
                    doloribus labore. Dolores suscipit dicta dolor at in velit officia alias voluptas ullam quasi,
                    impedit et
                    voluptatum, ratione ut cum doloremque assumenda sunt perferendis maxime?</div>
            </div>
        </div>

        <div class="row">
            <div class="col align-self-start text-xl-center ">
                <div class="col align-self-center bg-dark my-2 rounded-2">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Optio modi alias
                    inventore dolores illo deserunt dolor, nisi similique eos totam assumenda est ipsa, fugiat hic quam
                    ipsum harum ullam non!</div>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-start text-xl-center ">
                <div class="col align-self-center bg-dark my-2 rounded-2">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Optio modi alias
                    inventore dolores illo deserunt dolor, nisi similique eos totam assumenda est ipsa, fugiat hic quam
                    ipsum harum ullam non! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa fugit dolorem
                    amet quidem sed animi, officiis vitae nulla vero, voluptate, repellat inventore omnis.</div>
            </div>
        </div>
        <div class="row">
            <div class="col align-self-start text-xl-center " style="padding: 10px;">
                <button type="button" class="btn btn-outline-success bg-gradient d-inline w-auto" href="#"><a
                        href="{{createval.link}}"><b>1024px download</b></a></button>
            </div>
        </div>
    </div>
    
</div>
</div>
<?php endblock() ?>