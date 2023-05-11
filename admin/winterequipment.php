<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<?php include 'inc/db_config.php' ?>
<?php include 'inc/admin_component.php' ?>
<?php include 'db_conn.php';
            if(isset($_POST['submit'])){
                $nameItem = $_POST['nameItem'];
                $picItem = $_POST['picItem'];
                $typeItem = $_POST['typeItem'];
                $rentType= $_POST['rentType'];
                $categoryItem = $_POST['categoryItem'];
                $stockItem = $_POST['stockItem'];
                $priceItem = $_POST['priceItem'];
                $infoItem = $_POST['infoItem'];
                $noteItem = $_POST['noteItem'];
        
                $sql = "INSERT into item (item_name,item_stock,item_img,category,subcategory,rent_type,item_price,additional_info,item_note) values('$nameItem','$stockItem','$picItem','$categoryItem','$typeItem','$rentType','$priceItem','$infoItem','$noteItem')";
        
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "<script>
                    alert('Item added successfully');
                    window.location.href='winterequipment.php';
                    </script>";
                }else{
                    die(mysqli_error($conn));
                }
            }?>
<?php
 $database = new getDB("sanbonmatsu_reservation", "item");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Winter Equipment Rental Services Management</title>
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
                                    <a class="nav-link dropdown-toggle active" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Manage services
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="hiking.php">Hiking</a></li>
                                        <li><a class="dropdown-item" href="brewcraftbeer.php">Brew Craft Beer
                                                Experience</a>
                                        </li>
                                        <li><a class="dropdown-item" href="e-bikerental.php">E-bike Rental</a></li>
                                        <li><a class="dropdown-item active" aria-current="page" href="#">Winter
                                                Equipment
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

    <div class="container mt-5 text-center">
        <div class="row d-flex">
            <div class="col-3 mt-5 d-flex mt-5 mb-1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modalAdd">Add</button>
            </div>
            <!-- Modal add -->


            <div class="col-6 mt-4">
                <h2>Winter Equipment Management</h2>
            </div>
            <div class="col-3 mt-5 d-flex">
                <h5 style="bottom:4px;">Search:</i></h5>
                <input name="search" type="text" class="form-control ms-1 mb-1" id="search"
                    style="max-height:40px; bottom:5px;" placeholder="Search.." aria-describedby="searchHelp">
            </div>
        </div>
        <div class="row mb-4">
            <div class="card card_data mt-1 mb-1 " style="width:100%; min-height:440px">
                <div class="card-body">
                    <h5 class="card-title">Winter Equipment Table</h5>
                    <table class="table mb-3 text-start">
                        <thead>
                            <tr class="table text-center">
                                <th scope="col">Name</th>
                                <th scope="col">Pic</th>
                                <th scope="col">Type</th>
                                <th scope="col">Rent Type</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Price</th>
                                <th scope="col" style="width:320px">Other Info</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>


                        <?php
                            $result = $database->getWinterEquipmentTable();
                            while ($row = mysqli_fetch_assoc($result)){
                                componentDataWinterEquipment($row['item_name'],$row['item_img'], $row['subcategory'], $row['rent_type'], $row['item_stock'],$row['item_price'], $row['additional_info'], $row['item_id']);
                            }
                            ?>

                    </table>


                </div>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'?>
    <!-- Modal -->
    <!-- Modal Add -->
    <div class="modal modal-lg fade" id="modalAdd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="modalAdd" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalAddLabel">Add more E-Bike</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <div class="row d-flex">
                            <div class="col mb-3">
                                <label for="nameItem" class="form-label">Name</label>
                                <input type="text" class="form-control" id="nameItem" aria-describedby="nameItem"
                                    name="nameItem" autocomplete="off" required>
                            </div>
                            <div class="col mb-3">
                                <label for="typeItem" class="form-label">Type</label>
                                <select name="typeItem" class="form-select" id="typeItem">
                                    <option value="Cross-country Ski" selected>Cross-country Ski</option>
                                    <option value="Snowshoe">Snowshoe</option>
                                    <option value="Other">Other</option>
                                    <option value="Extension">Extension</option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label for="rentType" class="form-label">Rent Type</label>
                                <select name="rentType" class="form-select" id="rentType">
                                    <option value="Hourly" selected>Hourly</option>
                                    <option value="Daily">Daily</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="picItem" class="form-label">Picture</label>
                                <input type="text" class="form-control" id="picItem" aria-describedby="picItem"
                                    name="picItem" value="images/default.jpg" required>
                            </div>
                            <div class="mb-3">
                                <label for="categoryItem" class="form-label d-none">Category</label>
                                <input type="text" class="form-control d-none" id="categoryItem"
                                    aria-describedby="categoryItem" name="categoryItem"
                                    value="Winter Activity Equipment">
                            </div>
                            <div class="row d-flex">
                                <div class="col mb-3">
                                    <label for="stockItem" class="form-label">Stock</label>
                                    <input type="number" class="form-control" id="stockItem"
                                        aria-describedby="stockItem" name="stockItem" autocomplete="off" required>
                                </div>
                                <div class="col mb-3">
                                    <label for="priceItem" class="form-label">Price</label>
                                    <input type="number" class="form-control" id="priceItem"
                                        aria-describedby="priceItem" name="priceItem" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="infoItem" class="form-label">Other Info</label>
                                <textarea class="form-control" placeholder="Input other pricing info here" id="infoItem"
                                    name="infoItem" autocomplete="off" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="noteItem" class="form-label d-none">Note</label>
                                <textarea class="form-control d-none" placeholder="Input notes here" id="noteItem"
                                    autocomplete="off" name="noteItem"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Modal Add -->
    <?php include 'inc/footer.php'?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
<style>
html {
    overflow-x: hidden;
}
</style>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>