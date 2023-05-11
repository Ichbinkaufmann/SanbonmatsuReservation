<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php include 'inc/admin_component.php'?>
<?php include 'db_conn.php' ?>
<?php 'db_conn.php';
 $total_reservations = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS `total_reservations` FROM `reservation`"));
 $pending_reservations = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS `pending_reservations` FROM `reservation` WHERE status='Pending'"));
 $cancelled_reservations = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS `cancelled_reservations` FROM `reservation` WHERE status='Cancelled'"));
 $success_reservations = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS `success_reservations` FROM `reservation` WHERE status='Success'"));

 $total_reservations_amt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_money_received) as sum_amt FROM reservation"));
 $cancelled_reservations_amt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_money_received) as cancelled_amt FROM reservation WHERE status='Cancelled'"));
 $success_reservations_amt = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(total_money_received) as success_amt FROM reservation WHERE status='Success'"));

 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
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
                                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
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
                                                Experience</a></li>
                                        <li><a class="dropdown-item" href="e-bikerental.php">E-bike Rental</a></li>
                                        <li><a class="dropdown-item" href="winterequipment.php">Winter Equipment
                                                Rental</a></li>
                                        <li><a class="dropdown-item" href="restaurant.php">Restaurant</a></li>
                                        <li><a class="dropdown-item" href="nikkobrewingbbq.php">Nikko Brewing BBQ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="e-mailmanagement.php">Customer Confirmation
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

    <div class="container mt-2 ">
        <div class="row mb-3 text-center">
            <div class="col mt-5">
                <h1>Dashboard</h1>
            </div>
        </div>
        <div class="card text-center bg-secondary mb-3" style="width: 100%;">
            <div class="card-body">
                <div class="row mb-3 text-start">
                    <div class="col mt-1">
                        <h2>Reservation reports</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card text-center bg-info mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Total Reservations</h5>
                                <h3 class="card-text"><?php echo $total_reservations ['total_reservations'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center bg-warning mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Pending Reservations</h5>
                                <h3 class="card-text"><?php echo $pending_reservations ['pending_reservations'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center bg-danger mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Cancelled Reservations</h5>
                                <h3 class="card-text"><?php echo $cancelled_reservations ['cancelled_reservations'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center bg-success mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Success Reservations</h5>
                                <h3 class="card-text"><?php echo $success_reservations ['success_reservations'] ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 text-start">
                    <div class="col mt-1">
                        <h2>Money reports</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card text-center bg-danger mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Cancelled Reservations</h5>
                                <h3 class="card-text">¥<?php echo $cancelled_reservations_amt ['cancelled_amt'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center bg-success mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Success Reservations</h5>
                                <h3 class="card-text">¥<?php echo $success_reservations_amt ['success_amt'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-center bg-primary mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Total</h5>
                                <h3 class="card-text">¥<?php echo $total_reservations_amt ['sum_amt'] ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="reservations.php" class="btn btn-light">Go to reservation page</a>
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