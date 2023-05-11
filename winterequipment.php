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

    <title>Winter Equipment Rental - Sanbonmatsu Chaya</title>
</head>

<body>

    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/header.php'; ?>
    <section id="reservation">
        <div class="container">
            <div class="row d-block">
                <div class="col mt-2 mb-2 text-center ">
                    <h2 class="news-title">Winter Equipment Rental page</h2>
                    <p>Equip yourself with the best equipment for a fun winter activities.</p>
                </div>
            </div>
            <div class="row d-block">
                <div class="col mt-2 mb-2">
                    <div class="card card-book-info mb-3" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                About winter outdoor activity equipment rental</h5>
                            <p class="card-text text-center">Rental hours are from 9:00 to 16:00, closed on Wednesdays
                                (excluding
                                days when group meals and rentals are included).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-block">
                <div class="col mt-2 mb-2 text-start">
                    <h2 class="news-title">Our available Winter Equipment to rent:</h2>
                </div>
            </div>
            <div class="row d-block ">
                <div class="col">
                    <div class="card mb-3 card-book-info">
                        <div class="header"> <img src="admin/images/cross-country-ski.jpg" class="card-img-top "
                                alt="Cross-country ski">
                            <h1 class="card-text text-category text-white">Cross-Country Ski</h1>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Daily Rent</h6>
                            <!-- Cross country ski equipment -->
                            <?php
                        $result = $database->getDataWinterEquipmentSki();
                        while ($row = mysqli_fetch_assoc($result)){
                            componentWinterDaily($row['item_name'], $row['additional_info'], $row['item_price'], $row['item_id']);
                        }
                    ?>
                        </div>
                        <!-- End of Cross country ski equipment -->
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 card-book-info">
                        <div class="header"> <img src="admin/images/snowshoe.jpg" class="card-img-top "
                                alt="Cross-country ski">
                            <h1 class="card-text text-category text-white">Snowshoe</h1>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Hourly Rent</h6>
                            <!-- Snowshoe equipment hourly -->
                            <?php
                        $result = $database->getDataWinterEquipmentSnowshoeHourly();
                        while ($row = mysqli_fetch_assoc($result)){
                            componentWinterHourly($row['item_name'], $row['additional_info'], $row['item_price'], $row['item_id']);
                        }
                    ?>
                            <?php
                        $result = $database->getDataWinterEquipmentExtension();
                        while ($row = mysqli_fetch_assoc($result)){
                            componentWinterHourly($row['item_name'], $row['additional_info'], $row['item_price'], $row['item_id']);
                        }
                    ?>
                            <!-- End of Snowshoe equipment hourly -->
                            <h6 class="card-title">Daily Rent</h6>
                            <!-- Snowshoe daily -->
                            <?php
                        $result = $database->getDataWinterEquipmentSnowshoeDaily();
                        while ($row = mysqli_fetch_assoc($result)){
                            componentWinterDaily($row['item_name'], $row['additional_info'], $row['item_price'], $row['item_id']);
                        }
                    ?>
                            <!-- End of Snowshoe equipment daily -->
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 card-book-info" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Other winter equipment rental price list</h5>
                                    <h6 class="card-title">Daily Rent</h6>
                                    <!-- Other equipment -->
                                    <?php
                        $result = $database->getDataWinterEquipmentOther();
                        while ($row = mysqli_fetch_assoc($result)){
                            componentWinterDaily($row['item_name'], $row['additional_info'], $row['item_price'], $row['item_id']);
                        }
                    ?>
                                </div>
                                <!-- End of Other equipment -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card text-center mb-3 reservation-area-btn" style="width: 100%;">
                        <div class="card-body">
                            <h2 class="cart-title text-center">Want to make a reservation for something else?</h2>
                            <p class="card-text">Go to check out our other services</p>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Our Reservation Services
                                </button>
                                <ul class="dropdown-menu service-options" style="width:270px;">
                                    <li><a class="dropdown-item" href="hiking.php">Hiking</a></li>
                                    <li><a class="dropdown-item" href="beermakingexp.php">Brew Craft Beer</a></li>
                                    <li><a class="dropdown-item" href="ebike.php">E-Bike Rental</a></li>
                                    <li><a class="dropdown-item active" href="#">Winter Equipment Rental</a></li>
                                    <li><a class="dropdown-item" href="restaurantreservation.php">Restaurant</a>
                                    </li>
                                    <li><a class="dropdown-item" href="nikkocraftbeerbbq.php">Nikko Craft Beer BBQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div col="col">
                    <div class="card card-book-info mb-3" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Cancellation Rules</h5>
                            <table>
                                <tr>
                                    <th>Contract cancellation date</th>
                                    <th>Cancellation fee</th>
                                </tr>
                                <tr>
                                    <td>Cancellation before the date corresponding to ① below</td>
                                    <td>No cancellation fee</td>
                                </tr>
                                <tr>
                                    <td>① Cancellation from the 10th day to the 8th day counting back from the day
                                        before the guide start date</td>
                                    <td>20% of the guide fee</td>
                                </tr>
                                <tr>
                                    <td>② Cancellation from the day before the guide start date to the day after the 7th
                                        day to the 2nd day counting back</td>
                                    <td>30% of the guide fee</td>
                                </tr>
                                <tr>
                                    <td>③ Cancellation on the day before the guide start date</td>
                                    <td>40% of the guide fee</td>
                                </tr>
                                <tr>
                                    <td>④ Cancellation before the scheduled start time of the guide (on the day)</td>
                                    <td>50% of guide fee</td>
                                </tr>
                                <tr>
                                    <td>⑤ Cancellation after the scheduled start time of the guide</td>
                                    <td>100% of the guide fee</td>
                                </tr>
                            </table>
                            <p class="mt-4">Note: Regarding the cancellation fee, we will send you an invoice, so please
                                pay by bank
                                transfer. In addition, please bear the transfer fee.
                                *No cancellation fee will be charged for customers using the overseas traveler
                                exemption. Please be assured that it will not be covered.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center d-block">
                <div class="col mt-2 mb-2">
                    <h3 class="news-title">Enjoy your experience here at Sanbonmatsu Chaya</h3>
                    <p>For more information, please contact our customer service via the number or the
                        E-mail
                        address listed on our footer section.</p>
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
html {
    overflow-x: hidden;
}

.service-options {
    background-color: white !important;
}

.dark-mode .service-options {
    background-color: #464646 !important;
}

.dark-mode .card-book-info {
    background-color: #06152c !important;
    transition: background-color 0.2s ease-in;
}

.dark-mode .card-book-info-item:hover {
    outline: 2px solid black;
}

.card-book-info-item:hover {
    background-color: #e2e2e2 !important;
}

.btn-book {
    margin-left: auto;
    margin-right: auto;
    max-width: 300px;
}

.dark-mode .card-book-info {
    background-color: #06152c !important;
    transition: background-color 0.2s ease-in;
}

.card-book-info {
    background-color: #f2f2f2
}

.dark-mode .reservation-area-btn {
    width: 100%;
    background-color: #2E1A47 !important;
}

.btn-rent-area {
    display: flex;
    align-items: center;
    justify-content: center;
}

th,
td {
    padding: 10px;
}

.header {
    position: relative;
}

.card-note {
    border-top: 1px solid grey;
}

.text-justify {
    text-align: justify;
    text-justify: inter-word;
}

.text-category {
    position: absolute;
    left: 15px;
    bottom: 10px;
    -webkit-text-stroke: 1px black;
}
</style>

</html>