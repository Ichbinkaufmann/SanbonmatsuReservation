<?php

session_start();

require_once ('admin\inc\component.php');
require_once ('admin\inc\db_config.php');


// create instance of Createdb class
$database = new getDB("sanbonmatsu_reservation", "item");
$datacart = new getDB("sanbonmatsu_reservation", "item_cart");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images\small icon.png" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="effect.css">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Reservation - Sanbonmatsu Chaya</title>
</head>

<body>

    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/header.php'; ?>

    <section id="reservation">
        <div class="container desktop">
            <div class="row text-center d-block">
                <div class="col mt-3 mb-2">
                    <h1 class="news-title">Sanbonmatsu Chaya Reservation</h1>
                </div>
                <div class="col mt-2 mb-2">
                    <h3 class="news-title">Which activity would you like to chose?</h3>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col mb-5">
                        <a href="hiking.php">
                            <div class="card card-featured rounded-0">
                                <div class="featured-img rounded-0"><img class="rounded-0" src="images/hiking.jpg"
                                        alt="hiking" /></div>
                                <div class="featured-text">
                                    <h2 class="text-light text-center card-text">Hiking</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-5">
                        <a href="beermakingexp.php #reservation">
                            <div class="card card-featured rounded-0">
                                <div class="featured-img rounded-0"><img class="rounded-0"
                                        src="images/brewingcraftbeer.jpg" alt="Brew craft beer" /></div>
                                <div class="featured-text">
                                    <h2 class="text-light text-center card-text">Brewing Craft Beer</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row text-center d-block">
                        <div class="col mt-4 mb-2">
                            <h3 class="news-title">Enjoy your experience here at Sanbonmatsu Chaya</h3>
                            <p>For more information, please contact our customer service via the number or the E-mail
                                address listed on our footer section.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mobile">
            <div class="row text-center d-block">
                <div class="col mt-3 mb-2">
                    <h1 class="news-title">Sanbonmatsu Chaya Reservation</h1>
                </div>
                <div class="col mt-2 mb-2">
                    <h3 class="news-title">Which activity would you like to chose?</h3>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-4">
                    <div class="col mb-1">
                        <a href="#">
                            <div class="card card-featured-mobile rounded-0">
                                <div class="featured-img-mobile rounded-0"><img class="rounded-0"
                                        src="images/hiking.jpg" alt="hiking" /></div>
                                <div class="featured-text">
                                    <h2 class="text-light text-center card-text">Hiking</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-2">
                        <a href="#">
                            <div class="card card-featured-mobile rounded-0">
                                <div class="featured-img-mobile rounded-0"><img class="rounded-0"
                                        src="images/brewingcraftbeer.jpg" alt="Brew craft beer" /></div>
                                <div class="featured-text">
                                    <h2 class="text-light text-center card-text">Brewing Craft Beer</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row d-block">
                        <div class="col text-center mt-2 mb-2 mx-auto">
                            <h3 class="news-title">Enjoy your experience here at Sanbonmatsu Chaya</h3>
                            <p>For more information, please contact our customer service via the number or the E-mail
                                address listed on our footer section.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="scrollIt.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <?php include 'inc/footer.php'; ?>
</body>

<style>
.card-featured {
    min-width: 490px;
    min-height: 300px;
    max-width: 500px;
    max-height: 310px;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
}

.card-featured-mobile {
    min-width: 310px;
    min-height: 150px;
    max-width: 315px;
    max-height: 155px;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
}

.featured-text {
    position: absolute;
    top: 50%;
    left: 50%;
}

.featured-img {
    width: 100%;
}


.featured-title {
    font-weight: 700;
}

.card-text {
    font-weight: 700;
    -webkit-text-stroke-width: 3px;
    -webkit-text-stroke-color: black;
}

@media screen and (max-width: 1199px) {
    .desktop {
        display: none;
    }
}

@media screen and (min-width: 1200px) {
    .mobile {
        display: none;
    }
}
</style>

</html>