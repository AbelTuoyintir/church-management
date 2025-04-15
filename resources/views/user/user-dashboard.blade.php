<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
    .calendar {
      max-width: 100%;
    }
    .calendar table {
      width: 100%;
      border-collapse: collapse;
    }
    .calendar th,
    .calendar td {
      padding: 10px;
      width: 14.2%;
    }
    .calendar td {
      cursor: pointer;
    }
    .calendar td:hover {
      background-color: #f0f0f0;
    }
    .text-primary {
      color: #007bff;
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
        <nav class="navbar navbar-expand-lg navbar-dark sticky top-0 bg-[rgb(113,128,192)] p-4  z-50 px-2 py-2 mx-1 shadow-sm">
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


      <div class="container mt-4">
        <!-- Get Involved Section -->
        <div class="row">
          <div class="col-md-8 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Get Involved - Join a Club Today!</h5>
                <p class="card-text">Explore your interests and meet like-minded students by joining one of our many clubs. Whether you're into sports, arts, or academics, there's a club for you. Find your community!</p>
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Get Involved - Join a Club Today!</h5>
                  <p class="card-text">Explore your interests and meet like-minded students by joining one of our many clubs. Whether you're into sports, arts, or academics, there's a club for you. Find your community!</p>
                  <a href="#" class="btn btn-primary">Learn More</a>
                </div>
              </div>
          </div>


          <!-- Calendar Section -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Calendar</h5>
                <div class="d-flex justify-content-center">
                  <div class="calendar">
                    <h6 class="text-center" id="calendarMonth">January 2024</h6>
                    <table class="table table-bordered text-center">
                      <thead>
                        <tr>
                          <th>Sun</th>
                          <th>Mon</th>
                          <th>Tue</th>
                          <th>Wed</th>
                          <th>Thu</th>
                          <th>Fri</th>
                          <th>Sat</th>
                        </tr>
                      </thead>
                      <tbody id="calendarBody">
                        <!-- Days will be dynamically inserted here -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>

        <!-- Enrolled Courses -->
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Announcements</h5>
                <div class="card mb-2">
                  <div class="card-body">
                    <h6 class="card-title">Graphic Fundamentals - ART101</h6>
                    <p class="card-text">Prof. Smith - Monday & Wednesday</p>
                    <p class="card-text">9:00 AM - 10:30 AM</p>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body">
                    <h6 class="card-title">Advanced Web Design - ITD201</h6>
                    <p class="card-text">Dr. Jefferson - Tuesday & Thursday</p>
                    <p class="card-text">1:00 PM - 3:00 PM</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Homework Section -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tithe</h5>
                <ul class="list-group">
                  <li class="list-group-item">October Tithe: Ghc 5.00- Due: oct 12, 2024</li>
                  <li class="list-group-item">November tithe: Ghc 5.00 - Due: Nov 15, 2024</li>
                  <li class="list-group-item">Contribution for church building: Ghc 60.00 - : April 18, 2024</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Exam Board Section -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Exam Board</h5>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Exam Name</th>
                      <th>Start Date</th>
                      <th>Location</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Graphic Design Fundamentals</td>
                      <td>Jan 25, 2024</td>
                      <td>Design Studio A</td>
                      <td>Upcoming</td>
                    </tr>
                    <tr>
                      <td>Digital Illustration</td>
                      <td>Mar 12, 2024</td>
                      <td>Design Lab 1</td>
                      <td>Upcoming</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script>
    // Function to render a calendar for a given month and year
    function renderCalendar(year, month) {
      const calendarBody = document.getElementById("calendarBody");
      calendarBody.innerHTML = ""; // Clear previous content

      // Get the first day of the month and total days in the month
      const firstDay = new Date(year, month, 1).getDay();
      const totalDays = new Date(year, month + 1, 0).getDate();

      let dayCount = 1;
      for (let i = 0; i < 6; i++) {
        const row = document.createElement("tr");

        for (let j = 0; j < 7; j++) {
          const cell = document.createElement("td");
          if (i === 0 && j < firstDay) {
            cell.innerHTML = ""; // Empty cells before the first day
          } else if (dayCount > totalDays) {
            cell.innerHTML = ""; // Empty cells after the last day
          } else {
            cell.innerHTML = dayCount;
            cell.classList.add("text-primary"); // Highlight days
            dayCount++;
          }
          row.appendChild(cell);
        }

        calendarBody.appendChild(row);
        if (dayCount > totalDays) break; // Stop if all days are added
      }
    }

    // Render the calendar for January 2024
    renderCalendar(2024, 0); // January is 0 (months are zero-based in JavaScript)
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
