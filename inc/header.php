<section>
    <div class="row">
        <div class="col hero-image">
            <div class="card" style="width: 100%">
                <div><img class="header-desktop" src="images\reservationbanner.jpg" alt="header picture" /></div>
                <div class="card-body header-desktop header-caption-desktop">
                    <div class="col-3">
                        <a href="https://goo.gl/maps/kS7xu6pN7fvMoaQ2A" target="_blank" class="nikko-location">
                            <p class="card-text geo-click geo-link"><i class="bi bi-geo-alt"></i> Nikko Area</p>
                        </a>
                    </div>
                    <h1 class="card-title text-title-desktop text-white">Sanbonmatsu Chaya</h1>
                    <a href="#reservation"><button type="button" class="btn btn-success text-header">Make your
                            Reservations
                            now!
                            &#8595</button></a>

                </div>
                <div><img class="header-mobile" src="images\reservationbanner-mobile.jpg" alt="header picture" /></div>
                <div class="card-body header-mobile header-caption-desktop">
                    <div class="col-3">
                    </div>

                    <a href="#reservation"><button type="button" class="btn btn-success text-header-mobile">Make your
                            Reservations
                            now!
                            &#8595</button></a>
                    <h1 class="card-title text-title text-white">Sanbonmatsu</br>Chaya</h1>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media screen and (max-width: 746px) {
    .header-desktop {
        display: none;
    }
}

@media screen and (min-width: 747px) {
    .header-mobile {
        display: none;
    }
}

.text-title-desktop {
    position: absolute;
    bottom: 60px;
    left: -15px;
    z-index: 1;
}

.text-title {
    position: absolute;
    bottom: 60px;
    left: -15px;
    z-index: 1;
}


.text-header-mobile {
    position: absolute;
    bottom: 10px;
    left: -23px;
}

.text-header {
    position: absolute;
    bottom: 10px;
    left: -15px;
}

.geo-click {
    position: absolute;
    bottom: 130px;
    left: -15px;
    z-index: 1;
}
</style>