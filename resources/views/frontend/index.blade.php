<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/backend/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        .card{
            border-radius: 2em;
        }
        .wrapper-page{
            max-width: 50%;
        }
    </style>
</head>

<body class="" style="background-color: #0097a7;">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">                           
                            <div class="mb-3">
                                <img src="{{ asset('public/logo/share.png') }}" class="logo-dark mx-auto" alt="" style="width: 230px;
                                height: auto;">
                                <a href="https://www.apple.com/in/app-store/" target="blank" class="auth-logo">
                                    <img src="{{ asset('public/logo/app-store-apple-logo.svg') }}" width="160"
                                        class="logo-dark mx-auto" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <img src="{{ asset('public/logo/share.png') }}" class="logo-dark mx-auto" alt="" style="width: 230px;
                                    height: auto;">
                                    <p>Welcome to Inventory</p>
                                    <h2>Pro-Inventory</h2>
                                    <p>You are in indea's 1. Inventory Management System</p>
                                    <p>Please register and enjoye</p>
                                    <a href="{{route('login')}}" class="btn btn-primary">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/js/app.js') }}"></script>    
</body>

</html>
