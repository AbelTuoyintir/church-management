<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prayer Requests Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white fixed-top w-100 py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <h2>Prayer Requests Page</h2>
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
                    <a class="nav-link" href="#"><i class="bi bi-calendar-event"></i> Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-coin"></i> Donations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-megaphone"></i> Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-prayer"></i> Prayer Requests</a>
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
                    <input type="text" class="form-control" id="prayer-search" placeholder="Search for a prayer request..." onkeyup="searchPrayerRequests()">
                </div>
            </div>
            <h3 class="text-center mb-4">Prayer Requests</h3>

            <!-- Scrollable Prayer Requests Container -->
            <div class="prayer-requests-container" style="max-height: 400px; overflow-y: auto;">
                <div class="card prayer-request-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-prayer"></i> Healing for John</h5>
                        <p>Pray for John who is undergoing surgery. May God give him strength and restore his health.</p>
                        <small class="text-muted">Requested: Nov 3, 2024</small>
                    </div>
                </div>
                <div class="card prayer-request-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-prayer"></i> Peace for the Family</h5>
                        <p>Pray for peace and unity in the family of Sarah, who is going through tough times.</p>
                        <small class="text-muted">Requested: Oct 30, 2024</small>
                    </div>
                </div>
                <div class="card prayer-request-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-prayer"></i> Wisdom for Leaders</h5>
                        <p>Pray for our church leaders to be filled with wisdom in their decision-making.</p>
                        <small class="text-muted">Requested: Oct 25, 2024</small>
                    </div>
                </div>
            </div>

            <!-- Prayer Request Form -->
            <h4 class="text-center mb-4">Submit Your Prayer Request</h4>
            <form id="prayer-request-form">
                <div class="mb-3">
                    <label for="prayer-title" class="form-label">Prayer Title</label>
                    <input type="text" class="form-control" id="prayer-title" required>
                </div>
                <div class="mb-3">
                    <label for="prayer-description" class="form-label">Prayer Description</label>
                    <textarea class="form-control" id="prayer-description" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Prayer Request</button>
            </form>
        </main>

        <!-- Right Sidebar -->
        <nav class="col-md-3 col-lg-2 bg-light p-3 collapse d-md-block" id="sidebar-right">
            <h4>Quick Links</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-megaphone"></i> Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-prayer"></i> Prayer Requests</a>
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

<!-- Custom JS to filter prayer requests based on search input -->
<script>
    function searchPrayerRequests() {
        let input = document.getElementById("prayer-search");
        let filter = input.value.toLowerCase();
        let cards = document.querySelectorAll(".prayer-request-card");

        cards.forEach(function(card) {
            let title = card.querySelector("h5").textContent.toLowerCase();
            if (title.includes(filter)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    // Submit prayer request form (mock functionality)
    document.getElementById("prayer-request-form").addEventListener("submit", function(event) {
        event.preventDefault();

        let title = document.getElementById("prayer-title").value;
        let description = document.getElementById("prayer-description").value;

        // In a real application, here you would send the data to the server
        console.log("Prayer Title: " + title);
        console.log("Prayer Description: " + description);

        // Clear the form fields after submission
        document.getElementById("prayer-title").value = '';
        document.getElementById("prayer-description").value = '';
    });
</script>

</body>
</html>
