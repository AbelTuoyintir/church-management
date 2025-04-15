<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Sign-Up Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white fixed-top w-100 py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <h2>Volunteer Sign-Up Page</h2>
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
                    <a class="nav-link" href="#"><i class="bi bi-prayer"></i> Prayer Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-person"></i> Volunteer Sign-Up</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <main class="col-md-6 col-lg-8 bg-light p-4">
            <!-- Search Bar -->
            <div class="mb-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" id="volunteer-search" placeholder="Search for volunteer opportunities..." onkeyup="searchVolunteerOpportunities()">
                </div>
            </div>
            <h3 class="text-center mb-4">Volunteer Opportunities</h3>

            <!-- Scrollable Volunteer Opportunities Container -->
            <div class="volunteer-opportunities-container" style="max-height: 400px; overflow-y: auto;">
                <div class="card volunteer-opportunity-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-people"></i> Event Setup</h5>
                        <p>Help set up for upcoming events in the church. Tasks include arranging chairs and setting up decorations.</p>
                        <small class="text-muted">Date: Nov 15, 2024</small>
                        <button class="btn btn-primary btn-sm mt-2" onclick="showSignUpForm('Event Setup')">Sign Up</button>
                    </div>
                </div>
                <div class="card volunteer-opportunity-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-people"></i> Kitchen Assistance</h5>
                        <p>Assist in preparing meals for the church's weekly gatherings and community service events.</p>
                        <small class="text-muted">Date: Nov 20, 2024</small>
                        <button class="btn btn-primary btn-sm mt-2" onclick="showSignUpForm('Kitchen Assistance')">Sign Up</button>
                    </div>
                </div>
                <div class="card volunteer-opportunity-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-people"></i> Youth Mentorship</h5>
                        <p>Mentor the youth group and provide guidance on personal and spiritual growth.</p>
                        <small class="text-muted">Date: Dec 5, 2024</small>
                        <button class="btn btn-primary btn-sm mt-2" onclick="showSignUpForm('Youth Mentorship')">Sign Up</button>
                    </div>
                </div>
            </div>
        </main>

        <!-- Right Sidebar -->
        <nav class="col-md-3 col-lg-2 bg-light p-3 collapse d-md-block" id="sidebar-right">
            <h4>Quick Links</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-megaphone"></i> Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-prayer"></i> Prayer Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-people"></i> Volunteer Sign-Up</a>
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

<!-- Volunteer Sign-Up Modal -->
<div class="modal fade" id="volunteerModal" tabindex="-1" aria-labelledby="volunteerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="volunteerModalLabel">Sign Up for Volunteer Opportunity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="volunteer-signup-form">
                    <div class="mb-3">
                        <label for="volunteer-name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="volunteer-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="volunteer-email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="volunteer-email" required>
                    </div>
                    <div class="mb-3">
                        <label for="volunteer-opportunity" class="form-label">Choose Volunteer Opportunity</label>
                        <select class="form-select" id="volunteer-opportunity" required>
                            <option value="Event Setup">Event Setup</option>
                            <option value="Kitchen Assistance">Kitchen Assistance</option>
                            <option value="Youth Mentorship">Youth Mentorship</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS to filter volunteer opportunities and handle modal -->
<script>
    function searchVolunteerOpportunities() {
        let input = document.getElementById("volunteer-search");
        let filter = input.value.toLowerCase();
        let cards = document.querySelectorAll(".volunteer-opportunity-card");

        cards.forEach(function(card) {
            let title = card.querySelector("h5").textContent.toLowerCase();
            if (title.includes(filter)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    // Show the Sign-Up Modal with the selected volunteer opportunity
    function showSignUpForm(opportunity) {
        document.getElementById("volunteer-opportunity").value = opportunity;
        var myModal = new bootstrap.Modal(document.getElementById('volunteerModal'));
        myModal.show();
    }

    // Submit volunteer sign-up form (mock functionality)
    document.getElementById("volunteer-signup-form").addEventListener("submit", function(event) {
        event.preventDefault();

        let name = document.getElementById("volunteer-name").value;
        let email = document.getElementById("volunteer-email").value;
        let opportunity = document.getElementById("volunteer-opportunity").value;

        alert("Thank you " + name + "! You have signed up for " + opportunity + " and will receive further instructions at " + email + ".");

        // Reset the form after submission
        document.getElementById("volunteer-signup-form").reset();
        var myModal = new bootstrap.Modal(document.getElementById('volunteerModal'));
        myModal.hide();
    });
</script>

</body>
</html>
