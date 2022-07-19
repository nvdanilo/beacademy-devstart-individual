<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body class="p-3 mb-2 bg-dark text-white">
    <div class="container">
        <center>
            <div class="btn-group" role="group">
                <a href="/" type="button" class="btn btn-outline-light btn-sm">Início</a>
                <a href="/login" type="button" class="btn btn-outline-light btn-sm">Login</a>
                <a href="/sobre" type="button" class="btn btn-outline-light btn-sm">Sobre</a>
                <a href="/contato" type="button" class="btn btn-outline-light btn-sm">Contato</a>
            </div>
        </center>
        <hr>
        @yield("body")

    </div>
</body>
</html>