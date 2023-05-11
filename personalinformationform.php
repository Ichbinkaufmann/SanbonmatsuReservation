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

    <title>Personal Information Form - Sanbonmatsu Chaya</title>
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
                <h4>Please fill the form to continue the transaction</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form name="personalinfo" action="/action_page.php" onsubmit="return validateForm()" method="post">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Full Name</label>
                        <input name="fullname" type="name" class="form-control" id="exampleInputName"
                            aria-describedby="nameHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label">Phone Number</label>
                        <input name="phone" type="phone" class="form-control" id="exampleInputPhone"
                            aria-describedby="phoneHelp" required>
                        <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputAddress" class="form-label">Address</label>
                        <textarea name="address" style="height:150px;" class="form-control" id="exampleInputAddress"
                            aria-describedby="addressHelp" required></textarea>
                        <div id="addressHelp" class="form-text">We'll never share your address with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPostcode" class="form-label" required>Post Code</label>
                        <input name="Postcode" type="postcode" class="form-control" id="exampleInputPostcode"
                            aria-describedby="pstcodeHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputNotes" class="form-label">Notes</label>
                        <textarea style="height:150px;" class="form-control" id="exampleInputNotes"
                            aria-describedby="notesHelp"></textarea>
                        <div id="addressHelp" class="form-text">In case if you want to tell us additional informations.
                        </div>
                    </div>
                    <a href="confirmpersonalinfo.php"><button type="button" class="btn btn-primary">Submit</button></a>
                </form>
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
</style>

</html>