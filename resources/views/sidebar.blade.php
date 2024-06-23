<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Manager Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <div class="container">
        <aside class="sidebar">
        <nav>
            <ul>
                <li><a href="{{ route('profit') }}">Profit</a></li>
                <li><a href="{{ route('available') }}">Available</a></li>
            </ul>
        </nav>
        </aside>
        <main class="main-content">
            
        </main>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
