<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white fixed-top w-100 py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <h2>Events Page</h2>
        <div>
            <i class="bi bi-bell fs-4 mx-3" title="Notifications"></i>
            <i class="bi bi-person-circle fs-4" title="Profile"></i>
        </div>
    </div>
</header>

<!-- Main Dashboard Container -->
<div class="container-fluid mt-5 pt-4">
    <div class="row">
        <!-- Left Sidebar -->
        <nav class="col-md-3 col-lg-2 bg-light p-3 collapse d-md-block" id="sidebar-left">
            <h4>Navigation</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-camera-video"></i> Sermons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-calendar-event"></i> Events</a>
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
        <main class="col-md-6 col-lg-8 bg-light p-4">
            <!-- Search Bar -->
            <div class="mb-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" id="event-search" placeholder="Search for an event..." onkeyup="searchEvents()">
                </div>
            </div>
            <h3 class="text-center mb-4">Upcoming Events</h3>
            <!-- Event Card Example -->
            <div class="card event-card mb-4">
                <div class="card-body">
                    <h5><i class="bi bi-calendar-check"></i> Event: Youth Retreat</h5>
                    <p>Join us for a powerful weekend retreat with inspiring teachings and workshops. Don’t miss out on an opportunity to grow in faith and connect with others.</p>
                    <small class="text-muted">Date: December 5, 2024</small>
                    <br>
                    <a href="#" class="btn btn-primary mt-2">Register Now</a>
                </div>
            </div>
            <div class="card event-card mb-4">
                <div class="card-body">
                    <h5><i class="bi bi-calendar-check"></i> Event: Bible Study Group</h5>
                    <p>Our weekly Bible study group dives deep into God’s word. Join us every Thursday evening for an enriching time of fellowship and learning.</p>
                    <small class="text-muted">Date: November 15, 2024</small>
                    <br>
                    <a href="#" class="btn btn-primary mt-2">Join Now</a>
                </div>
            </div>
            <div class="card event-card mb-4">
                <div class="card-body">
                    <h5><i class="bi bi-calendar-check"></i> Event: Community Service</h5>
                    <p>Be a part of our community outreach program where we make a difference in the lives of those in need. Your involvement will help transform lives.</p>
                    <small class="text-muted">Date: November 20, 2024</small>
                    <br>
                    <a href="#" class="btn btn-primary mt-2">Sign Up</a>
                </div>
            </div>
        </main>

        <!-- Right Sidebar -->
        <nav class="col-md-3 col-lg-2 bg-light p-3 collapse d-md-block" id="sidebar-right">
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

<!-- Sidebar Toggler Button for Mobile -->
<button class="btn btn-dark d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-left, #sidebar-right" aria-expanded="false" aria-controls="sidebar-left, sidebar-right">
    <i class="bi bi-list"></i> Toggle Menus
</button>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS to filter events based on search input -->
<script>
    function searchEvents() {
        let input = document.getElementById("event-search");
        let filter = input.value.toLowerCase();
        let cards = document.querySelectorAll(".event-card");

        cards.forEach(function(card) {
            let title = card.querySelector("h5").textContent.toLowerCase();
            if (title.includes(filter)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }
</script>

</body>
</html>
