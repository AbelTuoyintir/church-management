<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership - Church Management</title>
    <meta name="description" content="Membership management for the church.">
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

        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Membership Management</h3>
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addMemberModal">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Add Member
                </button>
            </div>

            <!-- Membership Table -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Current Members</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered membership-table" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                @foreach($member as $member) <!-- Change this line -->
                                <tr>
                                    <td>{{ $member->id }}</td> <!-- Change members to member -->
                                    <td>{{ $member->first_name }} {{ $member->last_name }}</td> <!-- Change members to member -->
                                    <td>{{ $member->email }}</td> <!-- Change members to member -->
                                    <td>{{ $member->phone }}</td> <!-- Change members to member -->
                                    <td>
                                        <span class="badge {{ $member->status == 'Active' ? 'bg-success' : 'bg-danger' }}">
                                            {{ $member->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('Membership.edit', $member->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('Membership.destroy', $member->id) }}" method="POST" style="display:inline;">
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

    <!-- Add Member Modal -->
    <div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMemberModalLabel">Add New Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="addMemberForm" action="{{route ('Membership.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="memberName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="memberName" name="first_name">
                        </div>
                        <div class="mb-3">
                            <label for="memberName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="memberName" name="last_name">
                        </div>
                        <div class="mb-3">
                            <label for="memberEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="memberEmail" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="memberPhone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="memberPhone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label hidden">password</label>
                            <input type="text" class="form-control hidden" id="password" name="password" value="12345678">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label hidden">password</label>
                            <input type="text" class="form-control hidden" id="password" name="password_confirmation" value="12345678">
                        </div>
                        <div class="mb-3">
                            <label for="memberStatus" class="form-label">Status</label>
                            <select class="form-select" id="memberStatus" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Member</button>
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
    </script>
</body>
</html>
