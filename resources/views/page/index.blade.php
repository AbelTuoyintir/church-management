<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Dashboard - Church Management</title>
    <meta name="description" content="Admin Dashboard for church management website.">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- Add a calendar CSS plugin, e.g. fullCalendar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css" rel="stylesheet" />

<!-- FullCalendar JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="/index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/table.html"><i class="fas fa-user-tie"></i><span>Members</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/login.html"><i class="fas fa-donate"></i><span>Donations</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/register.html"><i class="fas fa-calendar"></i><span>Events</span></a></li>
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
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <button class="btn btn-primary py-0" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
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
                                    <a class="dropdown-item" href="{{Route('profile')}}"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>Profile</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>Settings</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>Activity log</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Content -->
                <div class="container-fluid mt-4">
                    <!-- Top Row: Quick Metrics Cards (Rearranged) -->
                    <div class="row">
                        <!-- Quick Metrics Cards (Total Members, Donations, Events Count, New Members) -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Members</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalMembers }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Donations</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">${{ number_format($totalDonations, 2) }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Events Count</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $eventsCount }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">New Members This Month</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $newMembers }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts Row -->
                    <div class="row">
                        <div class="col-xl-6 col-md-12 mb-4">
                            <!-- Chart Card -->
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Donations Over Time</div>
                                    <!-- Chart.js -->
                                    <canvas id="donationsChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-12 mb-4">
                            <!-- Calendar Card -->
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Upcoming Events</div>
                                    <!-- FullCalendar -->
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Member & Event Management Cards (Side-by-Side) -->
                    <div class="row">
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Manage Members</div>
                                            <p class="h5">Add or edit members, track their details</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{('Membership.store')}}" class="btn btn-primary">Go to Members</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Manage Events</div>
                                            <p class="h5">Create, view, and manage events</p>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{('event.showEvent')}}" class="btn btn-success">Go to Events</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Left Column: Member and Event Management -->
                            <div class="col-xl-8">
                                <!-- Recent Members Card -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Recent Members</h6>
                                    </div>
                                    <div class="card-body">
                                        <!-- Table for Recent Members -->
                                        <table class="table table-bordered  table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Joined Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John Doe</td>
                                                    <td>2024-01-01</td>
                                                    <td>Active</td>
                                                </tr>
                                                <!-- Additional rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Upcoming Events Card -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Upcoming Events</h6>
                                    </div>
                                    <div class="card-body">
                                        <!-- Table for Upcoming Events -->
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Event Name</th>
                                                    <th>Date</th>
                                                    <th>Location</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Annual Conference</td>
                                                    <td>2024-12-10</td>
                                                    <td>Main Hall</td>
                                                </tr>
                                                <!-- Additional rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column: Quick Actions -->
                            <div class="col-lg-4">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary btn-block">Add New Member</button>
                                        <button class="btn btn-success btn-block">Create Event</button>
                                        <button class="btn btn-warning btn-block">Send Announcement</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- End Main Content -->
            </div>
        </div>
    </div>

    <!-- Add Scripts -->
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Add Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Add FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.3.2/dist/fullcalendar.min.js"></script>
    <script>
        <script>
    var ctx = document.getElementById('donationsChart').getContext('2d');
    var donationsChart = new Chart(ctx, {
        type: 'line', // You can use 'line', 'bar', etc.
        data: {
            labels: @json($labels),  // Months or dates (from your controller)
            datasets: [{
                label: 'New Members',
                data: @json($data),     // Member count (from your controller)
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Month'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Members Count'
                    }
                }
            }
        }
    });

    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: @json($calendarEvents)  // Events from the controller
        });
    });
</script>
    </script>

</body>

</html>
