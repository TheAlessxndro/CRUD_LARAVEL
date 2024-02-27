<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Show</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            text-align: center;
        }

        ul li {
            display: inline-block;
            margin-right: 20px;
        }

        ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .student-info {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .student-info label {
            font-weight: bold;
        }

        .student-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .student-info div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Estudiantes</h2>
    <ul>
        <li><a href="{{ route('students.create') }}">Crear estudiante</a></li>
        <li><a href="{{ route('students.index') }}">Todos los estudiantes</a></li>
    </ul>

    <div>
        <label for="photo"> Photo</label>
        <img src="{{ asset('uploads/' . $student->photo) }}" alt="{{ $student->name }}" width="100px">
    </div>
    <div>
        <label for="name">Name</label>
        {{ $student ->name }}
    </div>
    <div>
        <label for="email">Email:</label>
        {{ $student->email }}
    </div>
</body>
</html>