<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biner</title>
</head>
<body>
    <form action="/decimaltobiner" method="POST">
        @csrf
        <input type="text" name="dec">

        <button type="submit">Cari</button>
    </form>
</body>
</html>