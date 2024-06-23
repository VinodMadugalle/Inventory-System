<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profit Form</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div >
        @include('header')
    </div>

    <div >
        @include('sidebar')


    <div class="main-content">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Model</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->model }}</td>
                    <td>{{ $inventory->brand }}</td>
                    <td>{{ $inventory->price }}
                        <form action="{{ route('inventories.update', $inventory->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 d-inline-flex">
                                <input type="hidden" class="form-control" id="quantity" name="quantity" value="{{ $inventory->quantity }}">
                                <input type="text" class="form-control" id="price" name="price" value="{{ $inventory->price }}">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </td>
                    <td>{{ $inventory->quantity }}
                        <form action="{{ route('inventories.update', $inventory->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 d-inline-flex">
                                <input type="hidden" class="form-control" id="price" name="price" value="{{ $inventory->price }}">
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $inventory->quantity }}">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </td>
                    <th><a href="{{ route('mobile') }}" class="btn btn-primary">Buy</a>
                        <form action="{{ route('inventories.destroy', $inventory->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>




</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
