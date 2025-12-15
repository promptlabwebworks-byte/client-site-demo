<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>403 Access Denied</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS (Optional: if using Laravel UI or CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .error-container {
            padding: 80px 20px;
        }
    </style>
</head>
<body>
    <div class="container error-container text-center">
        <h1 class="display-4 text-danger">403</h1>
        <p class="lead">Access Denied</p>
        <p>Your IP ({{ request()->ip() }}) is not allowed to view this site.</p>
        <a href="{{ url('/') }}" class="btn btn-outline-primary mt-4">Go Home</a>
    </div>
</body>
</html>