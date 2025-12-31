<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students CRUD</title>
</head>
<body>
    
    <h2>Add Students</h2>

    <form action="/students/store">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <button type="submit">Add Student</button>
    </form>

    <br>

    <h2>Students List</h2>

    @if (@session('success'))
        <p style="color: green;">{{session('success')}}</p>
    @endif
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        @foreach ($students as $students)
        <tr>
            <td>{{ $student->id}}</td>
            <td>{{ $student->name}}</td>
            <td>{{ $student->email}}</td>
            <td>{{ $student->phone}}</td>
            <td>
                <a href="/students/edit/{{$student->id}}">Edit</a>
                <a href="/students/delete/{{$student->id}}"
                    onclick="return confirm('Are you sure?')">
                    Delete</a>
            </td>
        </tr>
            
        @endforeach
    </table>
    

</body>
</html>