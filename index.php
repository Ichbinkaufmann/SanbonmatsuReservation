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
        <div class="container">
            <div class="row text-center d-block">
                <div class="col mt-3 mb-2">
                    <h1 class="news-title">Sanbonmatsu Chaya Reservation</h1>
                </div>
                <div class="col mt-2 mb-2">
                    <h3 class="news-title">What do you want to do?</h3>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-evenly mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="card card-news rounded-0">
                            <div class="news-img rounded-0"><img class="card-img-top" src="images/expbased.jpg"
                                    alt="Experience activities" /></div>
                            <div class="card-body rounded-0">
                                <h5>Experience based activities</h5>
                                <p class="card-text">Do some fun experiences with our top activities here at Sanbonmatsu
                                    Chaya</p>
                                <a href="experiencebasedreservation.php #reservation">
                                    <p class="card-link text-danger">View more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-news rounded-0">
                            <div class="news-img rounded-0"><img class="card-img-top" src="images\rental.jpg"
                                    alt="Rental" /></div>
                            <div class="card-body rounded-0">
                                <h5>Rental Center</h5>
                                <p class="card-text">Pick the equipments and E-bike to make your activities here more
                                    fun!</p>
                                <a href="rentalreservation.php #reservation">
                                    <p class="card-link text-danger">View more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-news rounded-0">
                            <div class="news-img rounded-0"><img class="card-img-top" src="images/foodie.jpg"
                                    alt="Meal" /></div>
                            <div class="card-body rounded-0">
                                <h5>Meal</h5>
                                <p class="card-text">Enjoy eating while feeling a relaxing sensation of our outdoor
                                    Barbeque activities or Book a seat at our
                                    restaurant to taste the deliciousness of our food from our best chef!</p>
                                <a href="mealreservation.php #reservation">
                                    <p class="card-link text-danger">View more</p>
                                </a>
                            </div>
                        </div>
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
.card-news {
    max-width: 405px;
    min-width: 305px;
    background-color: #f2f2f2 !important;
    max-height: 435px;
    min-height: 430px;
    margin-left: auto;
    margin-right: auto;
}


.card-img-top {
    margin-bottom: 1px;
    max-height: 250px
}
</style>

</html>