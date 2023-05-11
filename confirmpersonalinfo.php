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

    <title>Confirm Personal Information - Sanbonmatsu Chaya</title>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 100%">
                <div>
                    <img src="admin\images\onemorestep.jpg" style="width:100%; max-height:300px;"
                        alt="header picture" />
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4 text-center d-block">
            <div class="col">
                <h2>Personal Information</h2>
            </div>
            <div class="col mb-3">
                <h4>Are your personal information and reservation already correct?</h4>
            </div>
        </div>
        <div class="row d-block">
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        Reservation details and Personal information
                    </div>
                    <div class="card-body">
                        <table id="customers" style="width:100%">
                            <tr>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col mt-3">
                <div class="d-grid d-block">
                    <button class="btn btn-danger btn-final" type="button">Edit</button>
                    <button class="btn btn-success btn-final mt-3" type="button">Confirm</button>
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

#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

.btn-final {
    display: block;
    margin: auto;
}
</style>

</html>