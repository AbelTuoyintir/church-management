<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Header -->
<header class="bg-dark text-white fixed-top w-100 py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <h2>Groups</h2>
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
                    <a class="nav-link active" href="#"><i class="bi bi-person"></i> Groups</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <main class="col-md-6 col-lg-8 bg-light p-4">
            <h3 class="text-center mb-4">Available Groups</h3>

            <!-- Scrollable Groups Container -->
            <div class="groups-container" style="max-height: 400px; overflow-y: auto;">
                <!-- Group Card Example -->
                <div class="card group-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-person-check"></i> Bible Study Group</h5>
                        <p>Join us every Wednesday evening to study the Bible and grow together.</p>
                        <small class="text-muted">Meeting Time: Wednesdays at 6:00 PM</small>
                        <button class="btn btn-primary btn-sm mt-2" onclick="showJoinGroupForm('Bible Study Group')">Join</button>
                    </div>
                </div>

                <div class="card group-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-person-check"></i> Prayer Group</h5>
                        <p>Join our prayer group to pray together for our community and families.</p>
                        <small class="text-muted">Meeting Time: Fridays at 7:00 PM</small>
                        <button class="btn btn-primary btn-sm mt-2" onclick="showJoinGroupForm('Prayer Group')">Join</button>
                    </div>
                </div>

                <div class="card group-card mb-4">
                    <div class="card-body">
                        <h5><i class="bi bi-person-check"></i> Community Outreach</h5>
                        <p>Get involved in outreach programs to help the needy in our community.</p>
                        <small class="text-muted">Next Event: Dec 10, 2024</small>
                        <button class="btn btn-primary btn-sm mt-2" onclick="showJoinGroupForm('Community Outreach')">Join</button>
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
                    <a class="nav-link active" href="#"><i class="bi bi-person-check"></i> Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-chat-left-dots"></i> Messages</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Group Join Modal -->
<div class="modal fade" id="groupModal" tabindex="-1" aria-labelledby="groupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="groupModalLabel">Join Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="group-signup-form">
                    <div class="mb-3">
                        <label for="group-name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="group-name" required>
                    </div>
                    <div class="mb-3">
                        <label for="group-email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="group-email" required>
                    </div>
                    <div class="mb-3">
                        <label for="group-selection" class="form-label">Select Group</label>
                        <select class="form-select" id="group-selection" required>
                            <option value="Bible Study Group">Bible Study Group</option>
                            <option value="Prayer Group">Prayer Group</option>
                            <option value="Community Outreach">Community Outreach</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Join Group</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS to handle modal and form submission -->
<script>
    // Show the Join Group Modal with the selected group name
    function showJoinGroupForm(group) {
        document.getElementById("group-selection").value = group;
        var myModal = new bootstrap.Modal(document.getElementById('groupModal'));
        myModal.show();
    }

    // Handle form submission for joining a group
    document.getElementById("group-signup-form").addEventListener("submit", function(event) {
        event.preventDefault();

        let name = document.getElementById("group-name").value;
        let email = document.getElementById("group-email").value;
        let group = document.getElementById("group-selection").value;

        alert("Thank you " + name + "! You have successfully joined the " + group + " group. We will send further details to " + email + ".");

        // Reset the form after submission
        document.getElementById("group-signup-form").reset();
        var myModal = new bootstrap.Modal(document.getElementById('groupModal'));
        myModal.hide();
    });
</script>

</body>
</html>
