<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library - Church Management</title>
    <meta name="description" content="Library management page for church management system.">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
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
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Membership</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Donations</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Library</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
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
                            <input class="bg-light form-control border-0 small" type="text" placeholder="Search for books...">
                            <button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
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
                    <h3 class="text-dark mb-0">Library Management</h3>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addBookModal"><i class="fas fa-plus fa-sm text-white-50"></i> Add Book</button>
                </div>

                <!-- Book Table -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>ISBN</th>
                                <th>Published Date</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://via.placeholder.com/50" alt="Book Image" class="img-thumbnail"></td>
                                <td>The Great Gatsby</td>
                                <td>F. Scott Fitzgerald</td>
                                <td>9780743273565</td>
                                <td>1925-04-10</td>
                                <td>Inspirational</td>
                                <td>
                                    <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                </td>
                            </tr>
                            <!-- More book entries can be added here -->
                        </tbody>
                    </table>
                </div>
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
                    <form id="addBookForm">
                        <div class="mb-3">
                            <label for="bookImage" class="form-label">Book Image</label>
                            <input type="file" class="form-control" id="bookImage" accept="image/*" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="bookTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookAuthor" class="form-label">Author</label>
                            <input type="text" class="form-control" id="bookAuthor" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookISBN" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="bookISBN" required>
                        </div>
                        <div class="mb-3">
                            <label for="publishedDate" class="form-label">Published Date</label>
                            <input type="date" class="form-control" id="publishedDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookCategory" class="form-label">Category</label>
                            <select class="form-select" id="bookCategory" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="Inspirational">Inspirational Books</option>
                                <option value="Motivational">Motivational Books</option>
                                <option value="Faith">Books about Faith</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addBookButton">Add Book</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Add Book functionality
        document.getElementById('addBookButton').addEventListener('click', function() {
            const title = document.getElementById('bookTitle').value;
            const author = document.getElementById('bookAuthor').value;
            const isbn = document.getElementById('bookISBN').value;
            const publishedDate = document.getElementById('publishedDate').value;
            const imageFile = document.getElementById('bookImage').files[0];
            const imageUrl = URL.createObjectURL(imageFile); // Create a URL for the uploaded image
            const category = document.getElementById('bookCategory').value; // Get selected category

            const tableBody = document.querySelector('#dataTable tbody');
            const newRow = tableBody.insertRow();
            newRow.innerHTML = `
                <td><img src="${imageUrl}" alt="Book Image" class="img-thumbnail" style="width: 50px;"></td>
                <td>${title}</td>
                <td>${author}</td>
                <td>${isbn}</td>
                <td>${publishedDate}</td>
                <td>${category}</td> <!-- Display selected category -->
                <td>
                    <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                </td>
            `;

            // Reset the form
            document.getElementById('addBookForm').reset();
            // Close the modal
            var modal = bootstrap.Modal.getInstance(document.getElementById('addBookModal'));
            modal.hide();
        });
    </script>
</body>
</html>
