<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Brand</title>
    <meta name="description" content="It is a church management website.">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- FullCalendar CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Custom styles can be added here -->
    <style>
      /* Custom styles for the sidebar */
      #sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #f8f9fa;
            padding: 20px;
            transition: transform 0.3s ease;
            transform: translateX(0);
            z-index: 1000;
        }
        #sidebar.collapsed {
            transform: translateX(-100%);
        }
        #content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }
        #content.collapsed {
            margin-left: 0;
        }
        @media (max-width: 768px) {
            #sidebar {
                width: 200px;
            }
            #sidebar.collapsed {
                transform: translateX(-200px);
            }
            #content {
                margin-left: 0;
            }
        }
        @media (max-width: 576px) {
            #sidebar {
                display: none; /* Hide sidebar on extra small screens */
            }
            #sidebar.collapsed {
                display: block; /* Show sidebar when collapsed */
            }
        }
    </style>
</head>
<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar">
            <h3>Catholic</h3>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>

        <!-- Content Wrapper -->
        <div class="d-flex flex-column" id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid">
                    <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                            <button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button>
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
                                <a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>Profile</a>
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
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Dashboard</h3>
                    <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i class="fas fa-download fa-sm text-white-50"></i>Generate Report</a>
                </div>
                <!-- Cards Section -->
                <div class="row" data-aos="fade-up">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Members</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">2,000</div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-friends fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Donations</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$15,000</div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Events</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col me-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">New Members</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">150</div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-plus fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Latest Members</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Joined</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John Doe</td>
                                                    <td>john@example.com</td>
                                                    <td>2024-10-01</td>
                                                </tr>
                                                <tr>
                                                    <td>Jane Smith</td>
                                                    <td>jane@example.com</td>
                                                    <td>2024-10-02</td>
                                                </tr>
                                                <tr>
                                                    <td>Emily Johnson</td>
                                                    <td>emily@example.com</td>
                                                    <td>2024-10-03</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Upcoming Events</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                    <th>Date</th>
                                                    <th>Location</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Community Service</td>
                                                    <td>2024-11-05</td>
                                                    <td>Church Hall</td>
                                                </tr>
                                                <tr>
                                                    <td>Thanksgiving Service</td>
                                                    <td>2024-11-12</td>
                                                    <td>Main Auditorium</td>
                                                </tr>
                                                <tr>
                                                    <td>Youth Retreat</td>
                                                    <td>2024-11-19</td>
                                                    <td>Campsite</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4" data-aos="fade-up">
                            <div class="col-lg-12 mb-4">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Church Activities Calendar</h6>
                                    </div>
                                    <div class="card-body">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- AOS (Animate On Scroll) JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            AOS.init(); // Initialize AOS
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            const calendarEl = document.getElementById('calendar');

            sidebarToggle.addEventListener("click", function() {
                if (window.innerWidth < 768) {
                    sidebar.classList.toggle("show");
                    content.classList.toggle("collapsed");
                } else {
                    sidebar.classList.toggle("collapsed");
                    content.classList.toggle("collapsed");
                }
            });

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: [
                    { title: 'Community Service', start: '2024-11-05' },
                    { title: 'Thanksgiving Service', start: '2024-11-12' },
                    { title: 'Youth Retreat', start: '2024-11-19' },
                    // More events
                ]
            });
            calendar.render();
        });
    </script>
</body>
</html>
