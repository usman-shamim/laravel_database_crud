<body class="container mt-5 bg-dark text-white p-4 rounded">

    <h2>Edit Student</h2>
    <form method="POST" action="/students/update/{{ $student->id }}">
        @csrf
        <input type="text" name="name" value="{{ $student->name }}" required class="form-control my-3">

        <input type="email" name="email" value="{{ $student->email }}" required class="form-control my-3">

        <input type="text" name="phone" value="{{ $student->phone }}" required class="form-control my-3">

        <button type="submit" class="btn btn-warning">Update Student</button>
    </form>
    <a href="/students" class="btn btn-primary my-3">Back</a>

</body>