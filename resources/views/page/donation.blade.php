<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Donations Management</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Donations Management</h1>

        <!-- Display Success Message -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Add Donation Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Add New Donation</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('donation') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="donor_name" class="form-label">Donor Name</label>
                        <input type="text" class="form-control" name="name" id="donor_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount ($)</label>
                        <input type="number" class="form-control" name="amount" id="amount" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date" id="date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Donation</button>
                    <div>
                        <button type="submit" class="btn btn-primary">Update Donation</button>
                        <a href="{{ route('donation') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Donations Table -->
        <div class="card">
            <div class="card-header">
                <h5>Donations List</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Donor Name</th>
                            <th>Amount ($)</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donations as $donation)
                            <tr>
                                <td>{{ $donation->id }}</td>
                                <td>{{ $donation->name }}</td>
                                <td>{{ $donation->amount }}</td>
                                <td>{{ $donation->date }}</td>
                                <td>
                                    <form action="{{ route('donation.destroy', $donation->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    <form action="{{ route('donation', $donation->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">edit</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
