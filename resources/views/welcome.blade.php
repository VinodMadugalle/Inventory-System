<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Inventory System</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div >
        @include('header')
    </div>

    <div >
        @include('sidebar')
    </div>

    <div class="main-content">
        <div class="welcome-page">
        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Details</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <th>Smart phone</th>
                                <th>Smart phone</th>
                                <th>Details</th>
                                <th><a href="{{ route('mobile') }}" class="btn btn-primary">View</a></th>
                            </tr>
                            <tr>
                                <th>Tab</th>
                                <th>Tab</th>
                                <th>Details</th>
                                <th><a href="#" class="btn btn-primary">View</a></th>
                            </tr>
                            <tr>
                                <th>Laptop</th>
                                <th>Laptop</th>
                                <th>Details</th>
                                <th><a href="#" class="btn btn-primary">View</a></th>
                            </tr>
                            <tr>
                                <th>chagers</th>
                                <th>chagers</th>
                                <th>Details</th>
                                <th><a href="#" class="btn btn-primary">View</a></th>
                            </tr>

                            </tr>
                        </thead>

                    </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
