<?php

session_start();

require_once ('admin\inc\component.php');
require_once ('admin\inc\db_config.php');


// create instance of Createdb class
$datacart = new getDB("sanbonmatsu_reservation", "item_cart");
$nameUser=$_POST['nameUser'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Cart - Sanbonmatsu Chaya</title>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 100%">
                <div>
                    <img src="admin\images\cartbanner.jpg" style="width:100%; max-height:300px;" alt="header picture" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4  d-block">
            <div class="col text-center">
                <h2>Reservation Cart</h2>
            </div>
            <div class="col mb-3 text-start">
                <h4>All of the reservations in your cart:</h4>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-8 mt-4  d-block">
                <?php
                        $result = $datacart->getCartItem();
                        if($result){
                            while ($row = mysqli_fetch_assoc($result)){
                                componentCart($row['item_name'], $row['item_category'], $row['reserve_date'], $row['reserve_hour'], $row['item_subcategory'], $row['duration'], $row['quantity'], $row['note'], $row['total_price'], $row['cart_id']);
                            }
                        }
                        else{
                           echo " <h2 class=\"text-center mt-5\">Your cart is empty</h2> ";
                        }
                    ?>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card card-total-pay mb-3" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title">Total Payment:</h5>
                        <p class="card-text text-success">¥</p>
                    </div>
                    <div class="card-body  ">
                        <?php
                        $result = $datacart->getCartItem();
                        if($result){
                            echo"
                            <div class=\"dropdown\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
                                aria-expanded=\"false\">
                                Continue Shopping
                            </button>
                            <ul class=\"dropdown-menu service-options\" style=\"width:270px;\">
                                <li><a class=\"dropdown-item\" href=\"hiking.php\">Hiking</a></li>
                                <li><a class=\"dropdown-item\" href=\"beermakingexp.php\">Brew Craft Beer</a></li>
                                <li><a class=\"dropdown-item\" href=\"ebike.php\">E-Bike Rental</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Winter Equipment Rental</a></li>
                                <li><a class=\"dropdown-item\" href=\"restaurantreservation.php\">Restaurant</a>
                                </li>
                                <li><a class=\"dropdown-item\" href=\"nikkocraftbeerbbq.php\">Nikko Craft Beer BBQ</a></li>
                            </ul>
                        </div>
                        <div class=\"mt-1\">
                            <a href=\"personalinformationform.php\" class=\"btn btn-primary\">Proceed to payment</a>
                        </div>
                            ";
                        }
                        else{
                           echo "
                           <div class=\"dropdown\">
                           <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
                               aria-expanded=\"false\">
                               Continue Shopping
                           </button>
                           <ul class=\"dropdown-menu service-options\" style=\"width:270px;\">
                               <li><a class=\"dropdown-item\" href=\"hiking.php\">Hiking</a></li>
                               <li><a class=\"dropdown-item\" href=\"beermakingexp.php\">Brew Craft Beer</a></li>
                               <li><a class=\"dropdown-item\" href=\"ebike.php\">E-Bike Rental</a></li>
                               <li><a class=\"dropdown-item\" href=\"winterequipment.php\">Winter Equipment Rental</a></li>
                               <li><a class=\"dropdown-item\" href=\"restaurantreservation.php\">Restaurant</a>
                               </li>
                               <li><a class=\"dropdown-item\" href=\"nikkocraftbeerbbq.php\">Nikko Craft Beer BBQ</a></li>
                           </ul>
                       </div>";
                        }
                    ?>
                        <!-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Continue Shopping
                            </button>
                            <ul class="dropdown-menu service-options" style="width:270px;">
                                <li><a class="dropdown-item" href="hiking.php">Hiking</a></li>
                                <li><a class="dropdown-item" href="beermakingexp.php">Brew Craft Beer</a></li>
                                <li><a class="dropdown-item" href="ebike.php">E-Bike Rental</a></li>
                                <li><a class="dropdown-item" href="winterequipment.php">Winter Equipment Rental</a></li>
                                <li><a class="dropdown-item" href="restaurantreservation">Restaurant</a>
                                </li>
                                <li><a class="dropdown-item" href="nikkocraftbeerbbq.php">Nikko Craft Beer BBQ</a></li>
                            </ul>
                        </div>
                        <div class="mt-1">
                            <a href="#" class="btn btn-primary">Proceed to payment</a>
                        </div> -->
                    </div>
                </div>
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
.dark-mode .form-text {
    color: white !important;
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
    outline: 2px solid white;
}

.dark-mode .card-book-info:hover {
    transition: background-color 0.2s ease-in;
    outline: 2px solid white;
}


.note-area {
    outline: 2px solid black;
}

.card-book-info {
    outline: 2px solid black;
}

.card-book-info:hover {
    background-color: #e2e2e2 !important;
}

.dark-mode .card-total-pay {
    background-color: #031e23 !important;
}

.card-total-pay {
    background-color: #f2f2f2 !important;
}
</style>

</html>