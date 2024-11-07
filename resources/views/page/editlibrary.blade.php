<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Button to trigger the modal (optional) -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBookModal">
        Edit Book
    </button>

    <!-- Edit Book Modal -->
    <div class="modal fade" id="editBookModal" tabindex="-1" aria-labelledby="editBookModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="editBookModalLabel">Edit Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('library.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Book Title -->
                        <div class="mb-3">
                            <label for="bookTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="bookTitle" name="title" value="{{ $book->title }}" required>
                        </div>

                        <!-- Author -->
                        <div class="mb-3">
                            <label for="bookAuthor" class="form-label">Author</label>
                            <input type="text" class="form-control" id="bookAuthor" name="author" value="{{ $book->author }}" required>
                        </div>

                        <!-- Genre -->
                        <div class="mb-3">
                            <label for="bookGenre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="bookGenre" name="genre" value="{{ $book->genre }}" required>
                        </div>

                        <!-- Published Year -->
                        <div class="mb-3">
                            <label for="bookYear" class="form-label">Published Year</label>
                            <input type="number" class="form-control" id="bookYear" name="published_year" value="{{ $book->published_year }}" required>
                        </div>

                        <!-- Book Cover Image -->
                        <div class="mb-3">
                            <label for="bookImage" class="form-label">Book Cover Image</label>
                            <input type="file" class="form-control" id="bookImage" name="bookImage" accept="image/*">
                        </div>

                        <!-- Book PDF -->
                        <div class="mb-3">
                            <label for="bookPDF" class="form-label">Book PDF</label>
                            <input type="file" class="form-control" id="bookPDF" name="bookPDF" accept="application/pdf">
                        </div>

                        <!-- Book Summary -->
                        <div class="mb-3">
                            <label for="bookSummary" class="form-label">Book Summary</label>
                            <textarea class="form-control" id="bookSummary" name="summary" rows="4">{{ $book->summary }}</textarea>
                        </div>

                        <!-- Form Submit Buttons -->
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Optional: Auto-Open Modal Script (if required) -->
    <script>
        // If you need to programmatically open the modal on page load
        document.addEventListener("DOMContentLoaded", function() {
            var modal = new bootstrap.Modal(document.getElementById('editBookModal'));
            modal.show();
        });
    </script>
</body>
</html>
