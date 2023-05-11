<div class="autohide col-xl navbar-desktop fixed-top" style="width: 100%">
    <nav class=" navbar navbar-expand-lg nav-container">
        <a class="navbar-brand navbrand-light ms-5" href="#"><img src="images\Logo.png"
                style="width: 110px; height: auto" alt="" /></a>
        <a class="navbar-brand navbrand-dark ms-5" href="#"><img src="images\Logo_white.png"
                style="width: 110px; height: auto" alt="" /></a>
        <a href="owneridentity.php"><button type="button" class="button_cart mobile-cart-icon me-1 mt-2">
                <img src="images\cart.png" style="width: 60px; height: auto;" class="cart_img" alt="cart">
                <span class="total_item_on_cart">!</span>
            </button></a>
        <button class="navbar-toggler me-3 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container navbar navbar-expand-lg nav-container">
            <div class="container-fluid">
                <div class="collapse navbar-collapse ms-auto" id="navbarScroll">
                    <ul class="navbar-nav my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100%">
                        <li class="nav-item ms-5">
                            <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown ms-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Things to do</a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link dropdown-item text-white" href="#">Action</a></li>
                                <li><a class="nav-link dropdown-item text-white" href="#">Another action</a></li>
                                <li>
                                    <hr class="nav-link dropdown-divider" />
                                </li>
                                <li><a class="nav-link dropdown-item text-white" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ms-5">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Places to go</a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link dropdown-item text-white" href="#">Action</a></li>
                                <li><a class="nav-link dropdown-item text-white" href="#">Another action</a></li>
                                <li>
                                    <hr class="nav-link dropdown-divider" />
                                </li>
                                <li><a class="nav-link dropdown-item text-white" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link text-white" aria-current="page text-white"
                                href="index.php">Reservation</a>
                        </li>
                        <li class="nav-item ms-5">
                            <a class="nav-link text-white" aria-current="page text-white" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown ms-5 me-4">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="bi bi-globe-europe-africa"></i> ENGLISH</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item text-white" href="#">日本語</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <input class="switch-mode" type="checkbox" id="modeDarkToggle" onclick="darkmode()" />
                    <label class="switch-content ms-5" for="modeDarkToggle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-brightness-high sun-icon" viewbox="0 0 16 16">
                            <path
                                d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-moon moon-icon" viewbox="0 0 16 16">
                            <path
                                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                        </svg>
                    </label>
                </div>
            </div>
            <a href="owneridentity.php"> <button type="button" class="button_cart desktop-cart-icon ms-5 me-3">
                    <img src="images\cart.png" style="width: 60px; height: auto;" class="cart_img" alt="cart">
                    <span class="total_item_on_cart">!</span> </button> </a>
        </div>
    </nav>


</div>

<script>
document.addEventListener("DOMContentLoaded", function() {

    el_autohide = document.querySelector('.autohide');

    // add padding-top to bady (if necessary)
    // navbar_height = document.querySelector('.navbar').offsetHeight;
    // document.body.style.paddingTop = navbar_height + 'px';

    if (el_autohide) {
        var last_scroll_top = 0;
        window.addEventListener('scroll', function() {
            let scroll_top = window.scrollY;
            if (scroll_top < last_scroll_top) {
                el_autohide.classList.remove('scrolled-down');
                el_autohide.classList.add('scrolled-up');

            } else {
                el_autohide.classList.remove('scrolled-up');
                el_autohide.classList.add('scrolled-down');
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }
    // if

});
</script>

<style>
.dark-mode .modal-content {
    background-color: #040f20 !important;
}

.scrolled-down {
    transform: translateY(-100%);
    transition: all 0.3s ease-in-out;
}

.scrolled-up {
    transform: translateY(0);
    transition: all 0.3s ease-in-out;
}

.button_cart {
    position: relative;
    height: 60px;
    width: 60px;
    border-radius: 50%;
    align-content: center;
    display: flex;
    justify-content: center;
    background: transparent;
    border: none;
}

.modal-backdrop {
    z-index: -1;
}

.nav-link {
    color: azure;
}

.active {
    color: white;
}

.button_cart:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.3);
    ;
}

@media screen and (max-width: 993px) {
    .desktop-cart-icon {
        display: none;
    }
}

@media screen and (min-width: 992px) {
    .mobile-cart-icon {
        display: none;
    }
}

.total_item_on_cart {
    position: absolute;
    top: -5px;
    right: -5px;
    border-radius: 50%;
    color: white;
    background: red;
    width: 30px;
    height: 30px;
    align-content: center;
    display: flex;
    justify-content: center;
}

.cart_img {
    margin-top: auto;
    margin-bottom: auto;
}
</style>