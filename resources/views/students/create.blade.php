<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear estudiante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Crear estudiante</h1>
        <nav>
            <ul>
                <li><a href="{{ route('students.create') }}">Crear estudiante</a></li>
                <li><a href="{{ route('students.index') }}">Todos los estudiantes</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="photo">Foto: </label>
                <input type="file" name="photo" id="photo">
            </div>
            <div>
                <label for="name">Nombre: </label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Correo electrónico: </label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <button type="submit">Crear estudiante</button>
            </div>
        </form>
    </main>
    <footer>
    </footer>
</body>
</html>
