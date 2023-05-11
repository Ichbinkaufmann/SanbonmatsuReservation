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

    <title>E-Bike Rental - Sanbonmatsu Chaya</title>
</head>

<body>

    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/header.php'; ?>
    <section id="reservation">
        <div class="container">
            <div class="row d-block">
                <div class="col mt-2 mb-2 text-center ">
                    <h2 class="news-title">E-Bike Rental page</h2>
                    <p>Try our best quality Bike.</p>
                </div>
            </div>
            <div class="row d-block">
                <div class="col mt-2 mb-2">
                    <h2 class="news-title">Why our E-bike?</h2>
                    <p class="text-justify"> &emsp;&emsp; Our bikes are the best and cool looking bike and suited to be
                        used
                        in
                        Nikko
                        Area. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Minima blanditiis sit quae inventore non natus
                        consequuntur earum, maiores ipsa, ullam dolor eum consectetur cumque neque doloribus quam.
                        Architecto, a quam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim repellendus
                        nesciunt modi dolorum illo earum, alias, veniam harum temporibus, excepturi quis maxime suscipit
                        esse nam vel laborum iste repellat omnis? Ambitioni dedisse scripsisse iudicaretur. Cras mattis
                        iudicium purus sit
                        amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam
                        res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium
                        totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                    <p class="text-justify"> &emsp;&emsp; Our bikes are the best and cool looking bike and suited to be
                        used
                        in
                        Nikko
                        Area. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Minima blanditiis sit quae inventore non natus
                        consequuntur earum, maiores ipsa, ullam dolor eum consectetur cumque neque doloribus quam.
                        Architecto, a quam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim repellendus
                        nesciunt modi dolorum illo earum, alias, veniam harum temporibus, excepturi quis maxime suscipit
                        esse nam vel laborum iste repellat omnis? Ambitioni dedisse scripsisse iudicaretur. Cras mattis
                        iudicium purus sit
                        amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam
                        res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium
                        totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
                </div>
            </div>
            <div class="row d-block">
                <div class="col mt-2 mb-2 text-start">
                    <h2 class="news-title">Our available E-bikes to rent:</h2>
                </div>
            </div>
            <div class="row d-flex">
                <?php
                        $result = $database->getDataEbike();
                        while ($row = mysqli_fetch_assoc($result)){
                            componentEbike($row['item_name'], $row['additional_info'], $row['item_note'], $row['item_price'], $row['item_img'], $row['subcategory'], $row['item_id']);
                        }
                    ?>
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
                                    <li><a class="dropdown-item active" href="#">E-Bike Rental</a></li>
                                    <li><a class="dropdown-item" href="winterequipment.php">Winter Equipment Rental</a>
                                    </li>
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
.service-options {
    background-color: white !important;
}

.dark-mode .service-options {
    background-color: #464646 !important;
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

.list-group-item {
    background-color: #f2f2f2
}

.dark-mode .list-group-item {
    background-color: #06152c !important;
    color: white;
}

.dark-mode .reservation-area-btn {
    width: 100%;
    background-color: #2E1A47 !important;
}

th,
td {
    padding: 10px;
}

.card-note {
    border-top: 1px solid grey;
}

.text-justify {
    text-align: justify;
    text-justify: inter-word;
}
</style>

</html>