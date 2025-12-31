</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student - Students CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container mt-5 bg-dark text-white p-4 rounded">

    <h2>Edit Student</h2>

    <form method="POST" action="/students/update/{{ $student->id }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $student->name }}" required class="form-control my-3">

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $student->email }}" required class="form-control my-3">

        <label for="contact">Phone Number</label>
        <input type="text" name="contact" value="{{ $student->contact }}" required class="form-control my-3">

        <button type="submit" class="btn btn-warning">Update Student</button>
        <a href="/students" class="btn btn-primary my-3">Back to List</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>