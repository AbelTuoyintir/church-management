<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation - Church Management</title>
    <meta name="description" content="Donation management for the church.">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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

        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Donation Management</h3>
                <div class="d-flex justify-content-between">
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('donation.search') }}" method="GET">
                            <div class="input-group">
                                <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." name="search" value="{{ old('search', $search ?? '') }}" >
                                <button class="btn btn-primary py-0" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addDonationModal">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Add Donation
                </button>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Current Donations</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
                        @if($donations->isEmpty())
                            <p>No donations available.</p>
                        @else
                            @foreach($donations as $donation)
                                <!-- Display donation rows -->
                            @endforeach
                        @endif
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
                                @foreach($donations as $donation)
                                <tr>
                                    <td>{{ $donation->name }}</td>
                                    <td>{{ $donation->email }}</td>
                                    <td>{{ $donation->amount }}</td>
                                    <td>{{ $donation->date }}</td>
                                    <td>
                                        <a href="{{ route('donation.edit', $donation->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit</a>
                                        <form action="{{ route('donation.destroy', $donation->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this member?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addDonationModal" tabindex="-1" aria-labelledby="addDonationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDonationModalLabel">Add New Donation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addDonationForm" action="{{route('donation')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="donorName" class="form-label">Donor Name</label>
                            <input type="text" name="name" class="form-control" id="donorName" required>
                        </div>
                        <div class="mb-3">
                            <label for="donorEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="donorEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="donationAmount" class="form-label">Amount</label>
                            <input type="number" name="amount" class="form-control" id="donationAmount" required>
                        </div>
                        <div class="mb-3">
                            <label for="donationDate" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" id="donationDate" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Donation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#sidebarToggle').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
        });
    </script>
</body>
</html>
