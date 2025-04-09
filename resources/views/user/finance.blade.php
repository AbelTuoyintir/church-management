<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finance</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >

  <style>
       .sidebar {
      background-color: #04203d;
      color: white;
    }
    .sidebar a {
      color: rgb(113, 128, 192);
      font-size: 13px;
    }
    .card-body {
      font-size: 14px;
    }
    .navbar {
      background-color: #021e3a;
      position: sticky;
      z-index: 50; /* Ensures it stays above other elements */
    }


    .text-primary {
      color: #04203d;
    }
    .finance-header {
      background-color: #04203d;
      color: white;
      padding: 20px;
      border-radius: 0.5rem;
    }
    .finance-card {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .table thead th {
      background-color: #04203d;
      color: white;
    }
  </style>
</head>
<body>
     <!-- Sidebar -->
  <div class="d-flex h-full">
    <div class="sidebar p-3 h-full sticky top-0 left-0 z-50" style="width: 250px;">
      <h4 class="text-center">Utopia</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="fas fa-tachometer-alt"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-user"></i> Membership
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-calendar-alt"></i> Events
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-dollar"></i> Finance
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-graduation-cap"></i> Library
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-cogs"></i> Settings
          </a>
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark sticky top-0 bg-[rgb(12,18,46)] p-4  z-50 px-2 py-2 mx-1 shadow-sm">
            <div class="container-fluid">
              <!-- Branding -->
              <span class="navbar-brand fw-bold">Welcome, Merna!</span>

              <!-- Right Section -->
              <div class="d-flex align-items-center ms-auto gap-3">
                <!-- Search Form -->
                <form class="d-none d-sm-inline-block navbar-search">
                  <div class="input-group">
                    <input
                      class="bg-light form-control border-0 small"
                      type="text"
                      placeholder="Search for ..." />
                    <button class="btn btn-primary py-0" type="button" title="search">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </form>

                <!-- Logout Button -->
                <a href="#" class="btn btn-outline-light d-flex align-items-center" title="click here to Logout">
                  <i class="fas fa-sign-out-alt"></i>
                </a>
              </div>
            </div>
          </nav>
        <div class="container my-4">
            <!-- Finance Header -->
            <div class="finance-header text-center">
            <h2>Finance Management</h2>
            <p class="mb-0">Pay your tithes, donations, and society dues easily</p>
            </div>

            <div class="row g-4 mt-4">
            <!-- Tithes Section -->
            <div class="col-md-4">
                <div class="card finance-card">
                <div class="card-header bg-[rgb(12,18,46)] text-white text-center">Pay Tithes</div>
                <div class="card-body">
                    <form id="tithesForm">
                    <div class="mb-3">
                        <label for="titheAmount" class="form-label">Month of Payment</label>
                        <input type="text" id="societyName" class="form-control" placeholder="Month of payment..." required>
                    </div>
                    <div class="mb-3">
                        <label for="titheAmount" class="form-label">Amount (GHS)</label>
                        <input type="number" id="titheAmount" class="form-control" placeholder="Enter amount" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Pay Now</button>
                    </form>
                </div>
                </div>
            </div>

            <!-- Donations Section -->
            <div class="col-md-4">
                <div class="card finance-card">
                <div class="card-header bg-success text-white text-center">Make a Donation</div>
                <div class="card-body">
                    <form id="donationsForm">
                    <div class="mb-3">

                        <label for="donationAmount" class="form-label">Amount (GHS)</label>
                        <input type="number" id="donationAmount" class="form-control" placeholder="Enter amount" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Donate Now</button>
                    </form>
                </div>
                </div>
            </div>

            <!-- Society Dues Section -->
            <div class="col-md-4">
                <div class="card finance-card">
                <div class="card-header bg-warning text-dark text-center">Pay Society Dues</div>
                <div class="card-body">
                    <form id="duesForm">
                    <div class="mb-3">
                        <label for="societyName" class="form-label">Society Name</label>
                        <input type="text" id="societyName" class="form-control" placeholder="Enter society name" required>
                    </div>
                    <div class="mb-3">
                        <label for="duesAmount" class="form-label">Amount (GHS)</label>
                        <input type="number" id="duesAmount" class="form-control" placeholder="Enter amount" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Pay Dues</button>
                    </form>
                </div>
                </div>
            </div>
            </div>

            <!-- Transactions Table -->
            <div class="mt-5">
            <h4>Transaction Summary</h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center align-middle">
                <thead>
                    <tr>
                    <th>Type</th>
                    <th>Details</th>
                    <th>Amount (GHS)</th>
                    <th>Date</th>
                    </tr>
                </thead>
                <tbody id="transactionTableBody">
                    <tr>
                    <td colspan="4" class="text-muted">No transactions recorded</td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>

  <script>
    const transactionTableBody = document.getElementById('transactionTableBody');

    function addTransaction(type, details, amount) {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${type}</td>
        <td>${details}</td>
        <td>${amount.toFixed(2)}</td>
        <td>${new Date().toLocaleString()}</td>
      `;
      transactionTableBody.appendChild(row);
    }

    document.getElementById('tithesForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const amount = parseFloat(document.getElementById('titheAmount').value);
      if (amount && society) {
        addTransaction('Tithe', '-', amount);
        this.reset();
      }
    });

    document.getElementById('donationsForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const amount = parseFloat(document.getElementById('donationAmount').value);
      if (amount && society) {
        addTransaction('Donation', '-', amount);
        this.reset();
      }
    });

    document.getElementById('duesForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const society = document.getElementById('societyName').value;
      const amount = parseFloat(document.getElementById('duesAmount').value);
      if (society && amount) {
        addTransaction('Society Dues', society, amount);
        this.reset();
      }
    });
  </script>
</body>
</html>
