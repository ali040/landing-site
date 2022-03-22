<?php include "form-header.php" ?>

<section class="py-14">
    <div class=" container">
        <div class="row">
            <div class="col-12 col-md-6 m-auto">
                <div class="card card-lg border mb-10 mb-md-0">
                    <div class="card-body text-center">
                        <img src="img/logo-1.png" alt="" class="mb-5" style="max-width: 60px;border-radius: 50%;">
                        <h4 class="mb-5">
                            Enter verification code
                        </h4>
                        <p>
                            We sent a 6 digit code via text.
                        </p>
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control form-control-sm" id="" type="text" placeholder="_  _  _  _  _  _ " required>
                                    </div>
                                </div>
                                <div class="col-12 col-md text-left">
                                    <div class="form-group">
                                        <p>
                                            +91 9999999999
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="form-group">
                                        <a class="font-size-sm text-reset" data-toggle="modal" href="#modalPasswordReset">Resend Code</a>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-sm btn-dark" type="submit">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "form-footer.php" ?>