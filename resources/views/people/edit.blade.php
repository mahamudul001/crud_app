<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Person</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
      <h1 class="text-center mb-4">Edit Person</h1>
      <form action=" {{ route('people.update', $person->id) }} " method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="name" id="name" class="from-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" value=" {{ $person->name }} " required>
        </div>

        <div class="mb-3">
          <label for="email" id="email" class="from-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" value=" {{ $person->email }} " required>
        </div>

        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age" value="{{ $person->age }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
