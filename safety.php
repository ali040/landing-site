<?php include "header.php" ?>
<style>
    .driver a.nav-link {
        display: block;
    }

    .nav-link.driver {
        background: var(--logo-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .nav-link.driver::before {
        content: "";
        position: absolute;
        left: .75rem;
        right: .75rem;
        bottom: .25rem;
        border-top: 2px solid #01f0ff;
    }
</style>
<div class="row">
    <div class="col-10 m-auto pt-13">
        <img src="img/14.png" alt="" class="w-100">
    </div>
</div>
<div class="container my-10">
    <div class="row">
        <div class="col-10 m-auto">
            Due to the COVID-19 pandemic, tyt has updated health safety guidelines to help keep drivers and passengers safe. Under the new guidelines, drivers and passengers must stay home if they have COVID-19 or related symptoms, wear a face covering, keep the front seat empty, and roll windows down when possible. Drivers or passengers who repeatedly violate these new guidelines will be suspended. If a driver ever has a health safety concern, like someone not wearing a face covering, they can cancel the ride without incurring a fee.
        </div>
    </div>
</div>
<?php include "footer.php" ?>