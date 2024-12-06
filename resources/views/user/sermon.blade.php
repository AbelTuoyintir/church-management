<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sermon Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white fixed-top w-100 py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <h2>Sermon Page</h2>
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
                    <a class="nav-link active" href="#"><i class="bi bi-camera-video"></i> Sermons</a>
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
        <main class="col-md-6 col-lg-8 bg-light p-4">
            <!-- Search Bar -->
            <div class="mb-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" id="sermon-search" placeholder="Search for a sermon..." onkeyup="searchSermons()">
                </div>
            </div>
            <h3 class="text-center mb-4">Latest Sermons</h3>
            <!-- Sermon Card Example -->
            <div class="card sermon-card mb-4">
                <div class="card-body">
                    <h5><i class="bi bi-mic"></i> Sermon Title: The Power of Faith</h5>
                    <p>Join us as Pastor John Doe delves into the power of faith and how it transforms lives. The sermon explores Biblical teachings and personal stories to inspire greater trust in God's plan for us.</p>
                    <small class="text-muted">Posted 1 day ago</small>
                    <br>
                    <a href="#" class="btn btn-primary mt-2">Watch Now</a>
                </div>
            </div>
            <div class="card sermon-card mb-4">
                <div class="card-body">
                    <h5><i class="bi bi-mic"></i> Sermon Title: Healing in His Name</h5>
                    <p>This powerful sermon focuses on divine healing through faith in the name of Jesus. Pastor Jane Smith shares stories of healing miracles from the Bible and personal testimonies.</p>
                    <small class="text-muted">Posted 3 days ago</small>
                    <br>
                    <a href="#" class="btn btn-primary mt-2">Watch Now</a>
                </div>
            </div>
            <div class="card sermon-card mb-4">
                <div class="card-body">
                    <h5><i class="bi bi-mic"></i> Sermon Title: Living a Purposeful Life</h5>
                    <p>Pastor Mark Lewis speaks about living a purposeful life in alignment with God’s will. This sermon is filled with inspirational insights to guide you in finding and following your purpose.</p>
                    <small class="text-muted">Posted 1 week ago</small>
                    <br>
                    <a href="#" class="btn btn-primary mt-2">Watch Now</a>
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

<!-- Custom JS to filter sermons based on search input -->
<script>
    function searchSermons() {
        let input = document.getElementById("sermon-search");
        let filter = input.value.toLowerCase();
        let cards = document.querySelectorAll(".sermon-card");

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
