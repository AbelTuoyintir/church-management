<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <meta name="description" content="A church management website.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS for Styling and Animations -->
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            opacity: 0;
            animation: fadeIn 1s forwards;
            transform: translateY(-20px);
        }

        .btn {
            transition: transform 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .form-control-user {
            border-radius: 25px;
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Welcome Back!</h4>
                        </div>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <input class="form-control form-control-user" type="email" id="exampleInputEmail" placeholder="Enter Email Address..." name="email" required>
                            </div>
                            <div class="mb-3">
                                <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck-1">
                                    <label class="form-check-label" for="formCheck-1">Remember Me</label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-block btn-user w-100 mb-3" type="submit">Login</button>
                            <hr>
                            <a class="btn btn-danger d-block btn-google btn-user w-100 mb-2" role="button">
                                <i class="fab fa-google"></i>&nbsp; Login with Google
                            </a>
                            <a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button">
                                <i class="fab fa-facebook-f"></i>&nbsp; Login with Facebook
                            </a>
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="/register.html">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
