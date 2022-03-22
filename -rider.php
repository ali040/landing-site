<?php include "header.php" ?>
<style>
    .flickity-page-dots .dot.is-selected {
        background-color: #2bc9de;
    }

    .nav-link.rider {
        background: var(--logo-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .nav-link.rider::before {
        content: "";
        position: absolute;
        left: .75rem;
        right: .75rem;
        bottom: .25rem;
        border-top: 2px solid #01f0ff;
    }
</style>
<section class="py-15 mt-10" id="welcome" data-jarallax data-speed=".8" style="background-image: url(img/1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-5 text-white">
                <br><br><br><br><br>
            </div>
        </div>
    </div>
</section>
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
        <div class="col-md-5 position-static order-1 order-md-2">
            <!-- Slider -->
            <div class="position-static flickity-buttons-lg" id="sliderArrivals" data-flickity='{"pageDots": true}'>

                <!-- Item -->
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <h5>
                            Car Type
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam aliquam quod, suscipit ex
                            voluptatibus quaerat atque velit iure itaque molestiae, illo vitae sed esse sunt quisquam numquam
                            recusandae fuga.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <h5>
                            Car Type
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam aliquam quod, suscipit ex
                            voluptatibus quaerat atque velit iure itaque molestiae, illo vitae sed esse sunt quisquam numquam
                            recusandae fuga.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <h5>
                            Car Type
                        </h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam totam aliquam quod, suscipit ex
                            voluptatibus quaerat atque velit iure itaque molestiae, illo vitae sed esse sunt quisquam numquam
                            recusandae fuga.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-7 order-2 order-md-1">
            <!-- Slider -->
            <div data-flickity='{"fade": true, "asNavFor": "#sliderArrivals", "draggable": false}'>

                <!-- Item -->
                <div class="w-100">
                    <img src="img/car/1.jpg" alt="..." class="img-fluid">
                </div>

                <!-- Item -->
                <div class="w-100">
                    <img src="img/car/2.jpg" alt="..." class="img-fluid">
                </div>

                <!-- Item -->
                <div class="w-100">
                    <img src="img/car/3.jpg" alt="..." class="img-fluid">
                </div>
            </div>
        </div>

    </div>
</div>


<section class="pt-7">
    <div class="container">
        <div class="row pb-7 border-bottom">
            <div class="col-12 col-md-6 col-lg-4 border-left-md border-right-md">
                <div class="d-flex mb-6 mb-lg-0">
                    <i class="fas fa-user-clock fa-3x" style="color: #2bc9de!important;"></i>
                    <div class="ml-6">
                        <h6 class="heading-xxs mb-1">
                            24/7 Customer Support
                        </h6>
                        <p class="mb-0 font-size-sm text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 border-right-md">
                <div class="d-flex mb-6 mb-lg-0">
                    <i class="fas fa-fan fa-3x" style="color: #2bc9de!important;"></i>
                    <div class="ml-6">
                        <h6 class="mb-1 heading-xxs">
                            Fully A/C Cabs
                        </h6>
                        <p class="mb-0 font-size-sm text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 border-right-md">
                <div class="d-flex mb-6 mb-md-0">
                    <i class="fas fa-taxi fa-3x" style="color: #2bc9de!important;"></i>
                    <div class="ml-6">
                        <h6 class="mb-1 heading-xxs">
                            Affortable outstation cabs
                        </h6>
                        <p class="mb-0 font-size-sm text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "rider-download.php" ?>
<?php include "footer.php" ?>