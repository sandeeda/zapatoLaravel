<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <meta content="" property="og:title">
    <meta content="" property="og:type">
    <meta content="" property="og:url">
    <meta content="" property="og:image">

    <link href="site.webmanifest" rel="manifest">
    <link href="icon.png" rel="apple-touch-icon">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"
    />
    <!-- Place favicon.ico in the root directory -->

    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/userLogin.css" rel="stylesheet">

    <meta content="#fafafa" name="theme-color">
</head>
<body>



<section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img alt="Sample image"
                         class="img-fluid" src="https://img.freepik.com/free-vector/shoe-store-scene-with-young-guy-chooses-new-pair-running-sneakers-department-sports-shoes-male-consultant-helps-buyer-with-purchase_575670-928.jpg?w=2000">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form  method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button class="btn btn-primary btn-floating mx-1" type="button">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button class="btn btn-primary btn-floating mx-1" type="button">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button class="btn btn-primary btn-floating mx-1" type="button">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input class="form-control form-control-lg" id="form3Example3" placeholder="Enter a valid email address"
                                   type="email" name="email"/>
                            <label class="form-label" for="form3Example3">Email address</label>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input class="form-control form-control-lg" id="form3Example4" placeholder="Enter password"
                                   type="password" name="password"/>
                            <label class="form-label" for="form3Example4">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" id="form2Example3" type="checkbox" value=""/>
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a class="text-body" href="#!">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"
                                    type="submit">Login
                            </button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a class="link-danger"
                                                                                              href="#!">Register</a></p>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <p class="small fw-bold mt-2 pt-1 mb-0">If you are an admin then login <a class="link-success"
                                                                                                      href="#!">Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary footer-bottom">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a class="text-white me-4" href="#!">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white me-4" href="#!">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white me-4" href="#!">
                    <i class="fab fa-google"></i>
                </a>
                <a class="text-white" href="#!">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <!-- MDB -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
        type="text/javascript"
    ></script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
    </body>

    </html>

