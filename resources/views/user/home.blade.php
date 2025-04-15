<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church User Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white fixed-top w-100 py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <h2>Church Dashboard</h2>
        <div>
            <i class="bi bi-bell fs-4 mx-3" title="Notifications"></i>
            <i class="bi bi-person-circle fs-4" title="Profile"></i>
        </div>
    </div>
    <div class="toggle" style="justify-content: space-between; padding: 1rem;">
        <button class="btn btn-dark d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-left" aria-expanded="false" aria-controls="sidebar-left">
            <i class="bi bi-list"></i> Left Menu
        </button>
        <button class="btn btn-dark d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-right" aria-expanded="false" aria-controls="sidebar-right">
            <i class="bi bi-list"></i> Right Menu
        </button>
    </div>
</header>

<!-- Main Dashboard Container -->
<div class="container-fluid mt-5 pt-4">
    <div class="row">
        <!-- Left Sidebar -->
        <nav class="col-md-3 col-lg-2 bg-light p-4 collapse d-md-block" id="sidebar-left">
            <h4>Navigation</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-camera-video"></i> Sermons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-calendar-event"></i> Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-coin"></i> Donations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-person"></i> Profile</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <main class="col-md-6 col-lg-8 bg-light p-4" style="overflow-y: auto;">
            <div class="card-body shadow-sm p-1" style="max-height: 400px; overflow-y: auto;">
                @if($userEvents->isEmpty())
                    <p>No announcements available.</p>
                @else


                    @foreach($userEvents as $userevent)
                    <div class="announcement-item">
                        <!-- Display Image if Available -->
                        @if($userevent->image)
                            <div class="event-image">
                                <img src="{{ asset('storage/' . $userevent->image) }}" alt="Event Image" class="img-fluid" style="max-width: 100%; height: auto;">
                            </div>
                        @endif
                        <h5>Title: {{ $userevent->name }}</h5>
                        <p>Date: {{ $userevent->date }}</p>
                        <p>Time: {{ $userevent->time }}</p>
                        <p>Location: {{ $userevent->location }}</p>
                        <small class="text-muted">Posted on {{ $userevent->created_at->format('F j, Y, g:i a') }}</small>
                        <hr>
                        @if($userevent->image)
                    <div class="event-image">
                        <img src="{{ asset('storage/' . $userevent->image) }}" alt="Event Image" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                @endif
                    </div>
                    @endforeach
                @endif
            </div>
        </main>

        <!-- Right Sidebar -->
        <nav class="col-md-3 col-lg-2 bg-light p-4 collapse d-md-block" id="sidebar-right">
            <h4>Quick Links</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-bullhorn"></i> Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-heart"></i> Prayer Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-people"></i> Volunteer Sign-Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-chat-left-dots"></i> Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-question-circle"></i> Support</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
