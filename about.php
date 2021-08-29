<?php include_once("session.php"); ?>
<?php
include 'main.php';
include 'nav1.php';
?>
<html>

<head?>


    <style>
    img {
        max-width: 100%;
        max-height: 50%;
        padding-top: 10px;
    }
    </style>
    </head>


    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron mt-3">
                        <h1 class="display-7"> Know More About Us.....!</h1>
                        <p class="lead">EGuru is one of the popular online learning site in Nepal with many more
                            facilities to come.</p>
                        <hr class="my-4">
                        <p> Welcome to eGuru site this is one of the best online site who have Eager to Learn and
                            Succeed
                            in Life.
                            This site provides easy user interface so that user can easily search and learn anything
                            they
                            want.
                            <br>
                            Thank You...
                        </p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>

                    <h2 class="text-center text-dark my-4">Our Team Member</h2>

                    <div class="container">

                        <div class="row text-center">
                            <?php
                            include 'connection.php';
                            $query = "select * from team_mem";

                            $query_run = mysqli_query($conn, $query);
                            if ($query_run) {

                                while ($row = mysqli_fetch_array($query_run)) {

                            ?>
                            <div class="col-md-6 mb-4">
                                <?php echo '<img src="data:image;base64,' . base64_encode($row['img']) . '" alt="img" class="img-fluid rounded-circle  mb-4 covers img-thumbnail shadow-sm "' ?>
                                <br>

                                <h4 class="mb-0"><?php echo $row['name'] ?></h4> <br>
                                <span class="small text-uppercase text-muted"><?php echo $row['work'] ?></span><br>
                                <span class="small text-uppercase text-muted"><?php echo $row['address'] ?></span>
                            </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
        include 'footer.php'; ?>
    </body>

</html>