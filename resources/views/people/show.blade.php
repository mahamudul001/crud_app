<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Person Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Person Details</h2>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $person->name }}</h5>
                <p class="card-text">Email: {{ $person->email }}</p>
                <p class="card-text">Age: {{ $person->age }}</p>
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
