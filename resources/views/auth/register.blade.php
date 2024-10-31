<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <meta name="description" content="A church management website.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS for Styling and Animations -->
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #444;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .animated-container {
            animation: fadeIn 1s ease forwards;
            opacity: 0;
        }

        .slide-in-right {
            animation: slideInRight 1s ease-out forwards;
            opacity: 0;
        }

        /* Button scaling effect */
        .btn {
            transition: transform 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 animated-container">
        <div class="card shadow-lg border-0" style="max-width: 600px;">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <h3 class="text-dark">Create an Account</h3>
                    <p class="text-muted">Join us for a seamless church management experience!</p>
                </div>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" placeholder="Repeat Password" name="password_confirmation" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">Register Account</button>
                    <div class="d-flex justify-content-between mb-3">
                        <a class="btn btn-danger w-50 me-2" href="#">
                            <i class="fab fa-google"></i> Register with Google
                        </a>
                        <a class="btn btn-primary w-50" href="#">
                            <i class="fab fa-facebook-f"></i> Register with Facebook
                        </a>
                    </div>
                </form>
                <div class="text-center mt-4">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div>
                <div class="text-center mt-2">
                    <a class="small" href="/login.html">Already have an account? Login!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
