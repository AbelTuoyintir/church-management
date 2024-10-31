<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation - Church Management</title>
    <meta name="description" content="Donation management for the church.">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css"> <!-- Custom styles can be added here -->
    <style>
        body {
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        #sidebar {
            width: 250px;
            position: fixed;
            height: 100%;
            background-color: #f8f9fa;
            padding-top: 20px;
            transition: all 0.3s; /* Smooth transition */
            z-index: 1000;
        }

        #content {
            margin-left: 250px; /* Adjust margin to accommodate the sidebar */
            transition: margin-left 0.3s; /* Smooth transition */
        }

        #sidebarToggle {
            display: none; /* Hide toggle button by default */
        }

        @media (max-width: 768px) {
            #sidebar {
                width: 200px; /* Smaller sidebar on mobile */
                margin-left: -200px; /* Hide sidebar */
            }

            #content {
                margin-left: 0; /* Adjust content margin */
            }

            #sidebarToggle {
                display: block; /* Show toggle button on mobile */
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 2000; /* Ensure it appears above other elements */
            }

            #sidebar.active {
                margin-left: 0; /* Show sidebar */
            }

            #content.active {
                margin-left: 200px; /* Adjust content margin */
            }
        }

        .donation-table th, .donation-table td {
            vertical-align: middle;
        }
    </style>
</head>
<body id="page-top">
    <div id="sidebar">
        <h3>Catholic</h3>
        <ul class="navbar-nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Membership</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Donations</a>
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

    <div id="content">
        <button class="btn btn-primary" id="sidebarToggle"><i class="fas fa-bars"></i></button>

        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input class="bg-light form-control border-0 small" type="text" placeholder="Search for donations...">
                    <button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav flex-nowrap ms-auto">
                <!-- User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="#">
                        <span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span>
                        <img class="border rounded-circle img-profile" src="/assets/img/avatars/avatar1.jpeg">
                    </a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Donation Management</h3>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addDonationModal">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Add Donation
                </button>
            </div>

            <!-- Donation Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Current Donations</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered donation-table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Donor Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>johndoe@example.com</td>
                                    <td>$100</td>
                                    <td>2024-10-01</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td>janesmith@example.com</td>
                                    <td>$150</td>
                                    <td>2024-10-05</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more donations as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Donation Modal -->
    <div class="modal fade" id="addDonationModal" tabindex="-1" aria-labelledby="addDonationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDonationModalLabel">Add New Donation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addDonationForm">
                        <div class="mb-3">
                            <label for="donorName" class="form-label">Donor Name</label>
                            <input type="text" class="form-control" id="donorName" required>
                        </div>
                        <div class="mb-3">
                            <label for="donorEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="donorEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="donationAmount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="donationAmount" required>
                        </div>
                        <div class="mb-3">
                            <label for="donationDate" class="form-label">Date</label>
                            <input type="date" class="form-control" id="donationDate" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Donation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script>
        // Toggle sidebar
        $('#sidebarToggle').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        // Add Donation Form Submission
        $('#addDonationForm').on('submit', function(event) {
            event.preventDefault();
            // Get form values
            const name = $('#donorName').val();
            const email = $('#donorEmail').val();
            const amount = $('#donationAmount').val();
            const date = $('#donationDate').val();

            // Add new donation to the table
            $('#dataTable tbody').append(`
                <tr>
                    <td>${name}</td>
                    <td>${email}</td>
                    <td>$${amount}</td>
                    <td>${date}</td>
                    <td>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
            `);

            // Reset form
            $(this)[0].reset();
            $('#addDonationModal').modal('hide'); // Hide modal after submission
        });
    </script>
</body>
</html>
