<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Church Library - Admin</title>
    <meta name="description" content="Admin page for managing the church library.">
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

        <div class="d-flex flex-column p-20" id="content-wrapper">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <h3 class="text-dark mb-1">Church Library Management</h3>
                    </div>
                </nav>

                <!-- Main Content -->
                <div class="container-fluid">
                    <!-- Search Bar -->
                    <div class="d-flex justify-content-between">
                        <form class="d-flex w-50 mb-4">
                            <input class="form-control" type="text" placeholder="Search books by title or author" id="searchBook" />
                            <button class="btn btn-primary" type="button" onclick="searchBooks()">Search</button>
                        </form>

                        <a href="#addBookModal" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBookModal">
                            <i class="fas fa-plus"></i> Add New Book
                        </a>
                    </div>

                    <!-- Table of Books -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Genre</th>
                                <th>Published Year</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="bookList">
                            @foreach($books as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td> <!-- Display row number -->
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->genre }}</td>
                                    <td>{{ $book->published_year }}</td>
                                    <td>
                                        <a href="{{ route('library.edit', $book->id) }}" class="btn btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('library.destroy', $book->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
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



        <!-- Add Book Modal -->
        <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBookModalLabel">Add New Book</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('library.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="bookTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="bookTitle" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="bookAuthor" class="form-label">Author</label>
                                <input type="text" class="form-control" id="bookAuthor" name="author" required>
                            </div>

                            <div class="mb-3">
                                <label for="bookGenre" class="form-label">Genre</label>
                                <input type="text" class="form-control" id="bookGenre" name="genre" required>
                            </div>

                            <div class="mb-3">
                                <label for="bookYear" class="form-label">Published Year</label>
                                <input type="number" class="form-control" id="bookYear" name="published_year" required>
                            </div>

                            <div class="mb-3">
                                <label for="bookImage" class="form-label">Book Image</label>
                                <input type="file" class="form-control" id="bookImage" name="bookImage" accept="image/*">
                            </div>

                            <div class="mb-3">
                                <label for="bookSummary" class="form-label">Book Summary</label>
                                <textarea class="form-control" id="bookSummary" name="summary" rows="4"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="bookPDF" class="form-label">PDF Document</label>
                                <input type="file" class="form-control" id="bookPDF" name="bookPDF" accept="application/pdf">
                            </div>

                            <button type="submit" class="btn btn-primary">Add Book</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // Function to handle adding a new book (mock implementation)
        document.getElementById('addBookForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const title = document.getElementById('bookTitle').value;
            const author = document.getElementById('bookAuthor').value;
            const genre = document.getElementById('bookGenre').value;
            const year = document.getElementById('bookYear').value;

            // Here, add the new book to the database via API call
            alert(`New Book Added: ${title} by ${author} (${year})`);

            // Close modal after adding book
            $('#addBookModal').modal('hide');
        });

        // Function to search for books
        function searchBooks() {
            const query = document.getElementById('searchBook').value.toLowerCase();
            const rows = document.querySelectorAll('#bookList tr');
            rows.forEach(row => {
                const title = row.cells[1].textContent.toLowerCase();
                const author = row.cells[2].textContent.toLowerCase();
                if (title.includes(query) || author.includes(query)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        // Mock function to edit a book
        function editBook(id) {
            alert(`Edit book with ID: ${id}`);
        }

        // Mock function to delete a book
        function deleteBook(id) {
            alert(`Delete book with ID: ${id}`);
        }
    </script>
</body>

</html>
