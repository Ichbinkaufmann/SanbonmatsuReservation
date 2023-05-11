<?php 
include '../../admin/inc/db_config.php';
if(isset($_GET['getidhiking'])){
    $id=$_GET['getidhiking'];
    $sql="SELECT * from item WHERE item_id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $item_name = $row['item_name'];
    $category = $row['category'];
    $subcategory = $row['subcategory'];
    $item_price = $row['item_price'];
    if(isset($_POST['submit'])){
        $nameUser = $_POST['nameUser'];
        $datepicked = $_POST['datepicked'];
        $timestart = $_POST['timestart'];
        $duration = $_POST['duration'];
        $quantity = $_POST['quantity'];
        $noteItem = $_POST['noteItem'];
        $totalPrice = $item_price*$duration*$quantity;
        // $totalPricePost = $_POST['totalPrice'];

        $sql = "INSERT into item_cart (item_category,item_subcategory,cart_owner,item_name,reserve_date,reserve_hour,duration,quantity,total_price,note)
        values('$category','$subcategory','$nameUser','$item_name','$datepicked','$timestart',$duration,$quantity,$totalPrice,'$noteItem')";

        $result=mysqli_query($con,$sql);
        if($result){
            setcookie( "nameUser", $nameUser, time() + 36000000 );
            echo " 
                
                    <div class=\"card text-center card-notif text-bg-success mb-3\" style=\"max-width: 18rem;\">
                        <div class=\"card-header\">Notification</div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Item added to cart</h5>
                            <a href=\"../../winterequipment.php\" class=\"btn btn-primary\">OK</a>
                        </div>
                    </div>
                  ";
        }else{
            die(mysqli_error($con));
        }
    }
    
   }

?>
<?php include '../../admin/inc/component.php'?>
<?php $database = new getDB("sanbonmatsu_reservation", "item");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiking reservtaion details</title>
    <link rel="icon" type="image/x-icon" href="images/small icon.png" />
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../effect.css">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="bootsrap-datepicker\css\bootstrap-datepicker3.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
</head>

<body>
    <?php include 'inc/navbar.php'; ?>
    <div class="container page-container">
        <div class="row mt-5">
            <div class="col text-center">
                <h2>E-Bike Rental Reservation</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col ">
                <div class="card card-rervation-terms border-danger mb-3" style="max-width: 90%;">
                    <div class="card-header text-center">Winter Equipment Rental Reservation Terms</div>
                    <div class="card-body">
                        <p class="card-text-term">* Please make sure you picked the correct Winter Equipment for your
                            planned
                            activity.</p>
                        <p class="card-text-term">* By renting our Winter Equipment you are automatically agree to our
                            return
                            policies.</p>
                        <p class="card-text-term">* Rental hours are from 9:00 to 16:00, closed on Wednesdays (excluding
                            days when group meals and rentals are included).</p>

                        <h5 class="card-title text-center">Make sure you fill your reservation details according to the
                            terms</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col text-start">
                <h4>Enter your reservation details below:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-cart-form mt-2 mb-4" style="width: 100%; ">
                    <div class="card-body item-field">
                        <h5 class="card-title">Your Item:</h5>
                        <?php
                        $result = $database->getDataItemreservation();
                        while ($row = mysqli_fetch_assoc($result)){
                            itemConfirmation($row['item_img'], $row['item_name'], $row['subcategory'], $row['item_price']);
                        }
                    ?>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="col mb-3">
                                <label for="stockItem" class="form-label">Enter your full name</label>
                                <input class="form-control" name="nameUser" type="text" required>
                            </div>
                            <div class="row d-flex">
                                <div class="col mb-3">
                                    <label for="stockItem" class="form-label">Pick a date</label>
                                    <input class="form-control" name="datepicked" type="date" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="stockItem" class="form-label">Pick a time</label>
                                    <input class="form-control" name="timestart" type="time" required>
                                </div>
                            </div>
                            <div class="row d-flex">
                                <div class="col mb-3">
                                    <label for="stockItem" class="form-label d-none">Duration (Hour)</label>
                                    <input class="form-control d-none" name="duration" value="1" type="number" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="stockItem" class="form-label">Quantity</label>
                                    <input class="form-control" name="quantity" type="number" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="noteItem" class="form-label">Note(Optional)</label>
                                <textarea class="form-control" id="noteItem" autocomplete="off"
                                    name="noteItem"></textarea>
                            </div>
                    </div>
                    <div class="card-body">
                        <a class="text-white" href="../../winterequipment.php"><button type="button"
                                class="btn btn-danger">Cancel</button></a>
                        <button type="submit" name="submit" class="btn btn-primary">Add to cart</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="bootsrap-datepicker\js\bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="bootsrap-datepicker\js\bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="bootsrap-datepicker\js\jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="../../scrollIt.js" type="text/javascript"></script>
    <script src="../../script.js"></script>
</body>
<style>
.card-notif {
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    z-index: 3;
}

.dark-mode .card-cart-form {
    background-color: #06152c !important;
}

.card-cart-form {
    background-color: #f2f2f2
}

.dark-mode .card-item:hover {
    outline: 2px solid white;
}

.card-item:hover {
    outline: 2px solid black;
}

.dark-mode .card-item {
    background-color: #2E1A47 !important;
}

.card-item {
    position: relative;
    margin-left: auto;
    margin-right: auto;
}

.card-rervation-terms {
    position: relative;
    margin-left: auto;
    margin-right: auto;
}

.dark-mode .card-rervation-terms {
    background-color: #06152c !important;
}

.card-text-term {
    position: relative;
    margin-left: 7%;
    margin-right: 7%;
}

.notif-place {
    height: 100%;
}

.page-container {
    position: relative;
}

.img-field {
    overflow: hidden;
}
</style>

</html>