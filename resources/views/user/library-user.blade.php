<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Books</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-church"></i> Church Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/admin/dashboard">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/members">Members</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/donations">Donations</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/admin/library">Library</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/events">Events</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Library Books</h2>

        <!-- Search Bar -->
        <div class="row mb-4">
            <div class="col-md-6 mx-auto">
                <input type="text" class="form-control" id="searchBar" placeholder="Search for books...">
            </div>
        </div>

        <!-- Categories Navigation -->
        <ul class="nav nav-pills justify-content-center mb-5">
            <li class="nav-item">
                <a class="nav-link active" href="#most-downloaded">Most Downloaded</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#latest-downloaded">Latest Downloaded</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#devotion">Devotion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#faith">Faith</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#prayers">Prayers</a>
            </li>
        </ul>

        <!-- Books Sections -->
        <div id="book-sections">
            <!-- Most Downloaded Section -->
            <h3 id="most-downloaded" class="mb-4">Most Downloaded</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Book Card Example -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="book1.jpg" class="card-img-top" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title">Most Downloaded Book 1</h5>
                            <p class="card-text"><strong>Author:</strong> Author Name</p>
                            <p class="card-text">Summary of the most downloaded book.</p>
                            <a href="book1.pdf" download class="btn btn-primary w-100">Download Book</a>
                        </div>
                    </div>
                </div>
                <!-- Additional Most Downloaded Books... -->
            </div>

            <!-- Latest Downloaded Section -->
            <h3 id="latest-downloaded" class="mt-5 mb-4">Latest Downloaded</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Book Card Example -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="book2.jpg" class="card-img-top" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title">Latest Downloaded Book 1</h5>
                            <p class="card-text"><strong>Author:</strong> Author Name</p>
                            <p class="card-text">Summary of the latest downloaded book.</p>
                            <a href="book2.pdf" download class="btn btn-primary w-100">Download Book</a>
                        </div>
                    </div>
                </div>
                <!-- Additional Latest Downloaded Books... -->
            </div>

            <!-- Devotion Section -->
            <h3 id="devotion" class="mt-5 mb-4">Devotion</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Book Card Example -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="devotion1.jpg" class="card-img-top" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title">Devotion Book 1</h5>
                            <p class="card-text"><strong>Author:</strong> Author Name</p>
                            <p class="card-text">Summary of a book on devotion.</p>
                            <a href="devotion1.pdf" download class="btn btn-primary w-100">Download Book</a>
                        </div>
                    </div>
                </div>
                <!-- Additional Devotion Books... -->
            </div>

            <!-- Faith Section -->
            <h3 id="faith" class="mt-5 mb-4">Faith</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Book Card Example -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="faith1.jpg" class="card-img-top" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title">Faith Book 1</h5>
                            <p class="card-text"><strong>Author:</strong> Author Name</p>
                            <p class="card-text">Summary of a book on faith.</p>
                            <a href="faith1.pdf" download class="btn btn-primary w-100">Download Book</a>
                        </div>
                    </div>
                </div>
                <!-- Additional Faith Books... -->
            </div>

            <!-- Prayers Section -->
            <h3 id="prayers" class="mt-5 mb-4">Prayers</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Book Card Example -->
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <img src="prayer1.jpg" class="card-img-top" alt="Book Image">
                        <div class="card-body">
                            <h5 class="card-title">Prayers Book 1</h5>
                            <p class="card-text"><strong>Author:</strong> Author Name</p>
                            <p class="card-text">Summary of a book on prayers.</p>
                            <a href="prayer1.pdf" download class="btn btn-primary w-100">Download Book</a>
                        </div>
                    </div>
                </div>
                <!-- Additional Prayers Books... -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
