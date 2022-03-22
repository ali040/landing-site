<?php include "header.php" ?>
<style>
    .flickity-page-dots .dot.is-selected {
        background-color: #2bc9de;
    }


    .dn-1 {
        display: block;
    }

    .dn-2 {
        display: none;
    }

    #welcome:before {
        position: absolute;
        content: " ";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        z-index: 0;
        /* background-image: linear-gradient(#00000099, #0009); */
        background-color: #00000052;
    }
</style>

<div id="home" class="container-fluid mt-10">
    <div class="row bg-cover" data-jarallax data-speed=".8" style="background: var(--logo-gradient-alt);background-image: url(img/pattern-1.svg)">
        <div class="col-md-6 p-0">
            <img src="img/banner-1.png" alt="" class="w-100">
        </div>
        <div class="col-md-6 py-10 py-md-0  m-auto">
            <div class="text-center">
                <h1 class="text-white">
                    It’s time to change your ride experience! <br>
                    Download the tyt app Today
                </h1>
                <div class="row">
                    <div class="col-md-6 mb-5 text-md-right">
                        <a href="https://apps.apple.com/in/app/tyt-user/id1534093869" target="_blank">
                        <img src="img/app-store.svg" alt="" class="w-50 w-md-75 wow slideInLeft">
                    </a>
                    </div>
                    <div class="col-md-6 mb-5 text-md-left">
                        <a href="https://play.google.com/store/apps/details?id=com.tyt.client" target="_blank">
                            <img src="img/play-store.svg" alt="" class="w-50 w-md-75 wow slideInRight">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="py-10 bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-4 m-auto">
                <div class=" dan-card-30 card lift p-5 mb-md-0 ">
                    <div class=" card-img-top position-relative mx-auto " style=" max-width: 120px; ">
                        <img class=" img-fluid " src="img/ride/1.svg " alt=" ... ">
                    </div>
                    <div class=" card-body text-center ">
                        <h6 class=" mb-4 text-dark ">
                            Tap a button, get a ride
                        </h6>
                        <p class=" mb-0 text-gray-500 ">
                            Choose your ride and set your
                            location. You'll see your driver's picture and vehicle details, and can
                            track their arrival on the map.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 m-auto">
                <div class=" dan-card-30 card lift p-5 mb-md-0 ">
                    <div class=" card-img-top position-relative mx-auto " style=" max-width: 120px; ">
                        <img class=" img-fluid " src="img/ride/2.svg " alt=" ... ">
                    </div>
                    <div class=" card-body text-center ">
                        <h6 class=" mb-4 text-dark ">
                            Always on, always available
                        </h6>
                        <p class=" mb-0 text-gray-500 ">
                            No phone calls to make, no pick-ups to schedule. With 24/7 availability, request a ride any time of day, any
                            day of the year
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 m-auto">
                <div class=" dan-card-30 card lift p-5 mb-md-0 ">
                    <div class=" card-img-top position-relative mx-auto " style=" max-width: 120px; ">
                        <img class=" img-fluid " src="img/ride/3.svg " alt=" ... ">
                    </div>
                    <div class=" card-body text-center ">
                        <h6 class=" mb-4 text-dark ">
                            You rate,
                            we listen
                        </h6>
                        <p class=" mb-0 text-gray-500 ">
                            Rate your driver and provide anonymous feedback about your trip. Your input helps us make every
                            ride a 5-star experience.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<div class="container dan-slider-2 py-8">
    <div class="row position-relative align-items-center">
        <div class="col-md-5 position-static order-2 order-md-2">
            <!-- Slider -->
            <div class="position-static flickity-buttons-lg" id="sliderArrivals" data-flickity='{"pageDots": true}'>

                <!-- Item -->
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <h2>
                            On-demand rides for in-demand people
                        </h2>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <h2>
                            Make your work commute or business trip more environmentally friendly and cost effective.
                        </h2>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <h2>
                            Safe and easy rides throughout North Carolina
                        </h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-7 order-1 order-md-1">
            <!-- Slider -->
            <div data-flickity='{"fade": true, "asNavFor": "#sliderArrivals", "draggable": false}'>

                <!-- Item -->
                <div class="w-100">
                    <img src="img/car/1.jpg" alt="..." class="w-100">
                </div>

                <!-- Item -->
                <div class="w-100">
                    <img src="img/car/2.jpg" alt="..." class="w-100">
                </div>

                <!-- Item -->
                <div class="w-100">
                    <img src="img/car/3.jpg" alt="..." class="w-100">
                </div>
            </div>
        </div>

    </div>
</div>


<?php include "rider-download.php" ?>
<?php include "footer.php" ?>