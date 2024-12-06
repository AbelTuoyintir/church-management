<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Church Event Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"><!-- Custom styles can be added here -->

</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-church"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Admin Dashboard</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/members"><i class="fas fa-user"></i><span>Members</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/donations"><i class="fas fa-user-tie"></i><span>Donations</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/library"><i class="fas fa-donate"></i><span>Library</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/events"><i class="fas fa-calendar"></i><span>Events</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button>
                </div>
            </div>
        </nav>
        <!-- End Sidebar -->

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <!-- Notifications -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">Alerts Center</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="me-3">
                                            <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                        </div>
                                        <div><span class="small text-gray-500">December 12, 2019</span><p>A new monthly report is ready to download!</p></div>
                                    </a>
                                    <!-- More notifications... -->
                                </div>
                            </li>
                            <!-- Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">Alerts Center</h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image me-3">
                                            <img class="rounded-circle" src="/assets/img/avatars/avatar4.jpeg">
                                            <div class="bg-success status-indicator"></div>
                                        </div>
                                        <div class="fw-bold"><div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div><p class="small text-gray-500 mb-0">Emily Fowler - 58m</p></div>
                                    </a>
                                    <!-- More messages... -->
                                </div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <!-- User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="/assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="{{Route('profile.index')}}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>Settings</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>Activity log</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-lg px-4 py-2 shadow-sm border-0 rounded-pill text-danger fw-semibold hover-shadow bg-transparent">
                                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

            <!-- Event Overview Section -->
            <h2 class="mb-3">Event Overview</h2>
            <div class="d-flex align-items-center justify-content-between mb-4 p-3 bg-light rounded shadow-sm" id="main">
                <!-- Add New Event Button -->
                <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#eventModal">
                    <i class="fas fa-plus me-2"></i> Add New Event
                </button>

                <!-- Search Events Input -->
                <form class="d-flex align-items-center" method="GET" action="{{ route('event.search') }}">
                    <div class="input-group">
                        <input type="text" name="search"
                               class="form-control border-end-0 rounded-start"
                               placeholder="Search events..."
                               value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div style="max-height: 400px; overflow-y: auto;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Event -->
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td>{{ $event->location }}</td>
                                <td>{{ $event->status }}</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#eventModal">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <!-- Event Modal for Adding/Editing Events -->
            <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventModalLabel">Add/Edit Event</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('events.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="eventName" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" name="name" id="eventName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="eventDate" class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" id="eventDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="eventTime" class="form-label">Time</label>
                                    <input type="time" class="form-control" name="time" id="eventTime" required>
                                </div>
                                <div class="mb-3">
                                    <label for="eventLocation" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="location" id="eventLocation" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bookImage" class="form-label">Event Image</label>
                                    <input type="file" class="form-control" id="bookImage" name="bookImage" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RSVP Section -->
            <div class="section">
                <h3>RSVP for Events</h3>
                <form action="{{ route('rsvp.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="rsvpEvent" class="form-label">Invitation Type</label>
                        <select class="form-select" id="rsvpEvent" name="invitation_type" required>
                            <option value="" disabled selected>Select an event</option>
                            <option value="sunday_service">Special guest</option>
                            <option value="Chairman">Chairman</option>
                            <option value="Speaker">Speaker</option>
                            <option value="family">Family</option>
                            <option value="friend">Friend</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" cols="3" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eventDate" class="form-label">Date</label>
                        <input type="date" class="form-control" id="eventDate" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventTime" class="form-label">Time</label>
                        <input type="time" class="form-control" id="eventTime" name="time" required>
                    </div>
                    <div class="mb-3">
                        <label for="eventLocation" class="form-label">Location</label>
                        <input type="text" class="form-control" id="eventLocation" name="location" required>
                    </div>
                    <div class="mb-3">
                        <label for="attendeeName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="attendeeName" name="attendee_name" required>
                    </div>
                    <button type="submit" class="btn btn-primary">RSVP</button>
                </form>
            </div>

            <!-- Attendance Tracking Section -->
            <div class="section">
                <h3>Attendance Tracking</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Attendee Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sunday Service</td>
                            <td>Nov 5, 2024</td>
                            <td>John Doe</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Volunteer Sign-Up Section -->
            <div class="section">
                <h3>Volunteer Sign-Up</h3>
                <form action="{{ route('volunteer.volunteer') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="volunteerEvent" class="form-label">Name of Event</label>
                        <input type="text" class="form-control" id="volunteerEvent" name="event_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="volunteerName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="volunteerName" name="volunteer_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="volunteerRole" class="form-label">Role</label>
                        <input type="text" class="form-control" id="volunteerRole" name="role" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Add FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script>
        // Toggle sidebar collapse
        document.getElementById('sidebarToggleTop').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
        });
        document.addEventListener('DOMContentLoaded', function () {
        const publishButtons = document.querySelectorAll('.publish-button');

        publishButtons.forEach(button => {
            button.addEventListener('click', function () {
                const statusCell = this.closest('tr').querySelector('.event-status');

                // Toggle the status
                if (statusCell.textContent === 'Not Published') {
                    statusCell.textContent = 'Published';
                    this.textContent = 'Unpublish'; // Change button text
                    this.classList.remove('btn-success'); // Change button color
                    this.classList.add('btn-warning'); // Update to warning color
                } else {
                    statusCell.textContent = 'Not Published';
                    this.textContent = 'Publish'; // Change button text back
                    this.classList.remove('btn-warning'); // Change button color back
                    this.classList.add('btn-success'); // Update to success color
                }
            });
        });
    });
    </script>
</body>
</html>
