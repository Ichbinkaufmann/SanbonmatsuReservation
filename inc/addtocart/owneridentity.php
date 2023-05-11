<?php

session_start();

require_once ('admin\inc\component.php');
require_once ('admin\inc\db_config.php');


// create instance of Createdb class
$database = new getDB("sanbonmatsu_reservation", "item");
$datacart = new getDB("sanbonmatsu_reservation", "item_cart");

?>

<?php if(isset($_POST['submit'])){
        $nameUser = $_POST['nameUser'];
        header('location:../../cart.php');
    } 
    
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

    <title>Directing to Cart page</title>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-identity" style="max-width: 30rem;">
                    <div class="card-header text-center">
                        Identity Confirmation
                    </div>
                    <div class="card-body">
                        <h5>*Enter the same name that you assigned on each of your reservations earlier*</h5>
                    </div>
                    <div class="card-body ">
                        <form method="POST" action="cart.php" class="row d-block">
                            <div class="col">
                                <label for="nameUser" class="label-control">Enter your name</label>
                                <input type="text" name="nameUser" class="form-control" id="nameUser"
                                    placeholder="Full Name" required>
                            </div>
                            <div class="col mt-2 text-center">
                                <button type="submit" class="btn btn-primary mb-3">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
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

.card-identity {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    bottom: 40%;
}

.btn {
    margin-left: auto;
    margin-right: auto;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
    flex-direction: column;
}

.dark-mode .card-identity {
    background-color: #06152c !important;
    transition: background-color 0.2s ease-in;
}

.dark-mode .card-identity:hover {
    outline: 2px solid white;
}

.card-identity:hover {
    outline: 2px solid black;
}

.dark-mode .card-total-pay {
    background-color: #031e23 !important;
}
</style>

</html>