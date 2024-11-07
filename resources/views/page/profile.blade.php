<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User Profile - Church Management</title>
    <meta name="description" content="Profile page for church management website.">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Profile</h3>
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow">
                        <img class="rounded-circle mb-3 mt-4" src="/images/img1.jpg" width="160" height="160" alt="User Photo">
                        <div class="mb-3">
                            <button class="btn btn-primary btn-sm" type="button">Change Photo</button>
                        </div>
                        <h5 class="text-primary">Valerie Luna</h5>
                        <p class="text-muted">Church Member</p>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success btn-sm mx-1" type="button">Edit Profile</button>
                            <button class="btn btn-danger btn-sm mx-1" type="button">Delete Account</button>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="text-primary fw-bold m-0">Projects</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small fw-bold">Server migration <span class="float-end">20%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small fw-bold">Website redesign <span class="float-end">60%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small fw-bold">Database update <span class="float-end">80%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="text-primary fw-bold m-0">User Information</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="Valerie Luna" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" value="valerie@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" value="+1234567890" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" value="123 Church Street, City" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
