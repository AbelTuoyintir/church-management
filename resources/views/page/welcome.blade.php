<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>  <!-- Detailed Sections -->
            <div class="row mt-4">
                <div class="d-flex">
                    <nav id="sidebar" class="bg-dark p-3" style="min-width: 250px;">
                        <div class="sidebar-header text-white text-center">
                            <h3 class="text-3xl">Church Dashboard</h3>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#dashboard" class="nav-link text-white">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#members" class="nav-link text-white">Manage Members</a>
                            </li>
                            <li class="nav-item">
                                <a href="#donations" class="nav-link text-white">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a href="#events" class="nav-link text-white">Church Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#reports" class="nav-link text-white">Reports</a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings" class="nav-link text-white">Settings</a>
                            </li>
                        </ul>
                    </nav>


                <div class="d-flex">
                    <!-- Main Content -->
                    <div class="container-fluid">
                        <div class="row py-3">
                            <div class="col">
                                <h1 class="text-center">Church Management Dashboard</h1>
                            </div>
                        </div>

                        <!-- Dashboard Cards -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Members</h4>
                                        <p class="card-text">500 Total Members</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Donations</h4>
                                        <p class="card-text">$12,000 this month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Upcoming Events</h4>
                                        <p class="card-text">3 events this month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-danger mb-3">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Reports</h4>
                                        <p class="card-text">View monthly reports</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- Members Section -->
                <div class="container mt-5">
                    <h1 class="text-center mb-4">Members List</h1>

                    <div class="card">
                        <div class="card-header">
                            <h5>Members</h5>
                        </div>
                        <div class="card-body">
                            <div style="max-height: 400px; overflow-y: auto;">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($members as $member)
                                        <tr>
                                            <td>{{ $member->id }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->email }}</td>
                                            <td>{{ $member->phone }}</td>
                                            <td>
                                                <form action="{{ route('member.destroy', $member->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this member?');">Delete</button>
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


                <!-- Events Section -->
                <div class="col-12" id="events">
                    <h2>Church Events</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sunday Service</td>
                                <td>2024-10-10</td>
                                <td>10:00 AM</td>
                                <td>Main Hall</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>

                <!-- Reports Section -->
                <div class="col-12" id="reports">
                    <h2>Reports</h2>
                    <p>Monthly, quarterly, and annual financial and member reports will be available here.</p>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
