<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #444;
            overflow: hidden;
            text-align: center;
        }

        ul li {
            display: inline;
            margin-right: 20px;
        }

        ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: all 0.3s ease;
        }

        ul li a:hover {
            background-color: #666;
        }

        main {
            padding: 20px;
        }

        .student {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .student img {
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .student p {
            margin: 5px 0;
        }

        .student a {
            color: #333;
            text-decoration: none;
            margin-right: 10px;
        }

        .student a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h2>Estudiantes</h2>
    </header>
    <ul>
        <li><a href="{{ route('students.create') }}">Create Student</a></li>
        <li><a href="{{ route('students.index') }}">All Students</a></li>
    </ul>

    <main>
        @foreach ($students as $student)
            <div class="student">
                <img src="{{ asset('uploads/' . $student->photo) }}" alt="{{ $student->name }}" width="100px">
                <p><strong>Name:</strong> {{ $student->name }}</p>
                <p><strong>Email:</strong> {{ $student->email }}</p>
                <a href="{{ route('students.show', $student->id) }}">Detail</a>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>   
                <form action="{{ route('students.destroy', $student ->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                        <button type="submit">Delete</button>
                </form>
                <br>    
            </div>
        @endforeach
    </main>
</body>
</html>
