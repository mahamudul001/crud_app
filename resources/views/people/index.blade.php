<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
      <h1 class="text-center mb-4">People List</h1>

@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger mt-3">
        {{ session('error') }}
    </div>
@endif




      <a href=" {{ route('people.create') }} " class="btn btn-primary mb-4">Add new Person</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($people as $index => $person)
            <tr>
              <td> {{ $people->firstItem() + $index }} </td>
              <td> {{ $person->name }} </td>
              <td> {{ $person->email }} </td>
              <td> {{ $person->age }} </td>
              <td>
                <a href="{{ route('people.show', $person->id) }}" class="btn btn-info btn-sm">Show</a>
                <a href=" {{ route('people.edit', $person->id) }} " class="btn btn-warning"> Edit </a>
                <form action=" {{ route('people.destroy', $person->id) }}" method="POST" style="display: inline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      <div class="mb-3">
    <a href="{{ url('/') }}" class="btn btn-secondary">Back to Welcome Page</a>
</div>


<div class="d-flex justify-content-center mt-4">
    {!! $people->links('pagination::bootstrap-5') !!}
</div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
