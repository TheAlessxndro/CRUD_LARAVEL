<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
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

        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="file"],
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        img {
            max-width: 100px;
            height: auto;
            margin-bottom: 10px;
            display: block;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Editar estudiante gay</h1>
    <ul>
        <li><a href="{{ route('students.create') }}">Crear estudiante</a></li>
        <li><a href="{{ route('students.index') }}">Todos los estudiantes</a></li>
    </ul>

    <form action="{{ route('students.update', $student->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="photo">Foto Actual:</label>
            <img src="{{ asset('uploads/'.$student->photo) }}" alt="" style="width: 100px">
        </div>

        <div class="form-group">
            <label for="photo">Cambiar Foto:</label>
            <input type="file" name="photo" id="photo">
        </div>

        <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" value="{{ $student->name }}">
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" value="{{ $student->email }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</body>
</html>
