<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sanbonmatsu Chaya Reservation - Admin panel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Sanbonmatsu Chaya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Hello, Admin <?php echo $_SESSION['name']; ?></h6>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
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
                            <li><a class="dropdown-item" href="#">Hiking</a></li>
                            <li><a class="dropdown-item" href="#">Brew Craft Beer Experience</a></li>
                            <li><a class="dropdown-item" href="#">E-bike Rental</a></li>
                            <li><a class="dropdown-item" href="#">Winter Equipment Rental</a></li>
                            <li><a class="dropdown-item" href="#">Restaurant</a></li>
                            <li><a class="dropdown-item" href="#">Nikko Brewing BBQ</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="logout.php"><button type="button" class="btn btn-danger mt-3">Logout</button></a>
            </div>
        </div>
    </div>
</nav>