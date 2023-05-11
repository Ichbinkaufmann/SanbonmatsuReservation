<?php 

session_start();



if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<?php include 'inc/admin_component.php'?>
<?php include 'inc/db_config.php' ?>
<?php
 $database = new getDB("sanbonmatsu_reservation", "email_details");

?>
<!DOCTYPE html>
<html>

<head>
    <title>E-mail management page
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="col mb-1">
            <nav class="navbar navbar-dark bg-dark fixed-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sanbonmatsu Chaya Reservation - Admin panel</a>
                    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Sanbonmatsu Chaya</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <h6>Hello, Admin <?php echo $_SESSION['name']; ?></h6>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard.php">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reservations.php">Reservations</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Manage services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="hiking.php">Hiking</a></li>
                                        <li><a class="dropdown-item" href="brewcraftbeer.php">Brew Craft Beer
                                                Experience</a>
                                        </li>
                                        <li><a class="dropdown-item" href="e-bikerental.php">E-bike Rental</a></li>
                                        <li><a class="dropdown-item" href="winterequipment.php">Winter Equipment
                                                Rental</a></li>
                                        <li><a class="dropdown-item" href="restaurant.php">Restaurant</a></li>
                                        <li><a class="dropdown-item" href="nikkobrewingbbq.php">Nikko Brewing BBQ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Customer Confirmation
                                        E-mail</a>
                                </li>
                            </ul>
                            <a href="logout.php"><button type="button" class="btn btn-danger mt-3">Logout</button></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container mt-5 text-center">
        <div class="row d-flex">
            <div class="col-3 mt-5 d-flex mt-5 mb-1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalAdd">Add</button>
            </div>
            <div class="col-6 mt-4">
                <h2>E-Mail Management Page</h2>
            </div>
            <div class="col-3 mt-5 d-flex">
                <h5 style="bottom:4px;">Search:</i></h5>
                <input name="search" type="text" class="form-control ms-1 mb-1" id="search"
                    style="max-height:40px; bottom:5px;" placeholder="Search.." aria-describedby="searchHelp">
            </div>
        </div>
        <div class="row">
            <div class="card text-bg-light mt-1 mb-3" style="width:100%; min-height:520px">
                <div class="card-body">
                    <h5 class="card-title">E-mail Management Table</h5>
                    <table class="table ">
                        <thead>
                            <tr class="table-light">
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Function</th>
                                <th scope="col">Action</th>
                        </thead>
                        <?php
                        $result = $database->getEmailTable();
                        while ($row = mysqli_fetch_assoc($result)){
                            componentDataEmail($row['email'], $row['password_email'], $row['email_function'],$row['id']);
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>
<style>
html {
    overflow-x: hidden;
}
</style>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>