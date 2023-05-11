<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {



 ?>
<?php include '../inc/admin_component.php'?>
<?php include '../db_conn.php';
   
?>
<?php '../db_conn.php';
 $id = $_GET['updateid'];
 $sql = "SELECT * from item where item_id=$id";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
 $item_name = $row['item_name'];
 $item_stock = $row['item_stock'];
 $category = $row['category'];
 $subcategory = $row['subcategory'];
 $item_price = $row['item_price'];
 $additional_info = $row['additional_info'];
 $item_note = $row['item_note'];
 
         if(isset($_POST['submit'])){
             $nameItem = $_POST['nameItem'];
             $typeItem = $_POST['typeItem'];
             $categoryItem = $_POST['categoryItem'];
             $stockItem = $_POST['stockItem'];
             $priceItem = $_POST['priceItem'];
             $infoItem = $_POST['infoItem'];
             $noteItem = $_POST['noteItem'];
     
             $sql = "UPDATE item set item_id=$id,item_name='$nameItem',item_stock=$stockItem,category='$categoryItem',subcategory='$typeItem',item_price=$priceItem,additional_info='$infoItem',item_note='$noteItem' WHERE item_id =$id";
     
             $result=mysqli_query($conn,$sql);
             if($result){
                echo "<script>
                alert('Item Edited successfully');
                window.location.href='../hiking.php';
                </script>";

             }else{
                 die(mysqli_error($conn));
             }
         } ?>
<!DOCTYPE html>
<html>

<head>
    <title>Hiking Services Management</title>
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
                                        <li><a class="dropdown-item active" aria-current="page" href="#">Hiking</a></li>
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
            <div class="col">
                <h2>Edit Hiking Service</h2>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <form method="post">
                    <div class="row d-flex">
                        <div class="col mb-3">
                            <label for="nameItem" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameItem" aria-describedby="nameItem"
                                name="nameItem" autocomplete="off" value="<?php echo $item_name?>" required>
                        </div>
                        <div class="col mb-3">
                            <label for="typeItem" class="form-label">Type</label>
                            <select class="form-select" id="typeItem" aria-label="Select Hiking Type" name="typeItem"
                                required>
                                <option value="Personal">Personal</option>
                                <option value="Business">Business</option>
                                <option value="Student">Student</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="categoryItem" class="form-label d-none">Category</label>
                            <input type="text" class="form-control d-none" id="categoryItem"
                                aria-describedby="categoryItem" name="categoryItem" value="Hiking">
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col mb-3">
                            <label for="stockItem" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stockItem" aria-describedby="stockItem"
                                name="stockItem" autocomplete="off" required value="<?php echo $item_stock?>">
                        </div>
                        <div class="col mb-3">
                            <label for="priceItem" class="form-label">Price</label>
                            <input type="number" class="form-control" id="priceItem" aria-describedby="priceItem"
                                name="priceItem" autocomplete="off" required value="<?php echo $item_price?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="infoItem" class="form-label">Other Info</label>
                        <textarea class="form-control" id="infoItem" name="infoItem" autocomplete="off"
                            required><?php echo $additional_info?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="noteItem" class="form-label">Note</label>
                        <textarea class="form-control" id="noteItem" autocomplete="off" name="noteItem"
                            required><?php echo $item_note?></textarea>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-secondary"><a class="text-white"
                                href="../hiking.php">Cancel</a>
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include '../inc/footer.php'?>
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

.card_data {
    background-color: #cfe2ff;
}

td {
    vertical-align: middle;
}
</style>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>