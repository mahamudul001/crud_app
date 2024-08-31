<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to the CRUD Application</h1>
            <p class="lead">This application allows you to manage people with options to create, read, update, and delete records.</p>
            <hr class="my-4">
            <p>Use the buttons below to navigate through the CRUD options.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('people.index') }}" role="button">View All People</a>
            <a class="btn btn-success btn-lg" href="{{ route('people.create') }}" role="button">Add a New Person</a>
        </div>
    </div>
</body>
</html>
