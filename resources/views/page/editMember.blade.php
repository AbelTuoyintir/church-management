<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Member</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom animation for form fade-in */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 0.8s ease-out forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Sidebar styling */
        #sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            min-height: 100vh;
        }
        #sidebar h3 {
            color: #007bff;
        }
        .navbar-nav .nav-link {
            color: #007bff;
        }
        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar">
            <h3>Catholic</h3>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('donation')}}">Donations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('library')}}">Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="container mt-5 fade-in">
            <h2 class="mb-4">Update Member</h2>
            <form action="{{ route('Membership.update', $member->id) }}" method="POST" class="needs-validation" novalidate>
                @csrf
                @method('PUT')
        
                <div class="mb-3">
                    <label for="first_name" class="form-label">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $member->first_name }}" required>
                    <div class="invalid-feedback">Please enter the first name.</div>
                </div>
        
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $member->last_name }}" required>
                    <div class="invalid-feedback">Please enter the last name.</div>
                </div>
        
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}" required>
                    <div class="invalid-feedback">Please enter a valid email.</div>
                </div>
        
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $member->phone }}" required>
                    <div class="invalid-feedback">Please enter a phone number.</div>
                </div>
        
                <div class="mb-4">
                    <label for="status" class="form-label">Status:</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="active" {{ $member->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $member->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    <div class="invalid-feedback">Please select a status.</div>
                </div>
        
                <button type="submit" class="btn btn-primary">Update Member</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS for functionality -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Enable client-side Bootstrap validation
        (function () {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.slice.call(forms).forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>
