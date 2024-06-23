<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avalable Items</title>
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
        <h1>Avalable Items</h1>
        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <th>Smart phone</th>
                                <th><a href="{{ route('mobile') }}" class="btn btn-primary">View</a></th>
                            </tr>
                            <tr>
                                <th>Tab</th>
                                <th><a href="#" class="btn btn-primary">View</a></th>
                            </tr>
                            <tr>
                                <th>Laptop</th>
                                <th><a href="#" class="btn btn-primary">View</a></th>
                            </tr>
                            <tr>
                                <th>chagers</th>
                                <th><a href="#" class="btn btn-primary">View</a></th>
                            </tr>

                            </tr>
                        </thead>

                    </table>
        </div>
        <div class="container mt-5">
            <div class="shadow-box">
                <h2>Enter Item Details</h2>
                <form action="{{ route('inventoryDetails.store') }}"  method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>

                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model">
                    </div>

                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
