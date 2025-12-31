<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container mt-5 bg-dark text-white p-4 rounded">

    <h2>Add Students</h2>

    <form action="/students/store" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" class="form-control my-3" required>
        <input type="text" name="email" placeholder="Email" class="form-control my-3" required>
        <input type="text" name="phone" placeholder="Phone" class="form-control my-3" required>
        <button type="submit" class="btn btn-success">Add Student</button>
    </form>

    <br>

    <h2>Students List</h2>

    @if (@session('success'))
        <p style="color: green;">{{session('success')}}</p>
    @endif
    
    <table border="1" cellpadding="10" class="table table-bordered table-striped text-white">
        <tr class="table-light table-bordered">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>

        @foreach ($students as $students)
        <tr>
            <td>{{ $student->id}}</td>
            <td>{{ $student->name}}</td>
            <td>{{ $student->email}}</td>
            <td>{{ $student->contact}}</td>
            <td>
                <a href="/students/edit/{{$student->id}}" class="btn btn-warning">Edit</a>
                <a href="/students/delete/{{$student->id}}"
                    class="btn btn-danger"
                    onclick="return confirm('Are you sure?')">
                    Delete</a>
            </td>
        </tr>
            
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>