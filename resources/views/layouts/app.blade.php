<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gestion des employés</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        nav{
            margin-bottom:20px;
        }

        nav a{
            margin-right:15px;
            text-decoration:none;
            font-weight:bold;
        }

        table{
            border-collapse: collapse;
            width:60%;
        }

        th,td{
            border:1px solid black;
            padding:8px;
        }

        footer{
            margin-top:40px;
            color:gray;
        }
    </style>

</head>

<body>

    <nav>
        <a href="{{ route('employes.index') }}">Employés</a>
    </nav>

    <hr>

    {{-- contenu des pages --}}
    @yield('content')

    <hr>

    <footer>
        Application Laravel - TD BUT Informatique
    </footer>

</body>
</html>