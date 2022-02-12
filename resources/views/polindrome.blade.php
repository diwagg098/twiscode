<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Test</h2>
    <form action="/polindrome" method="POST">
        @csrf
        <p>Masukan Kata</p>
        <input type="text" name="text">

        <button type="submit">Submit</button>
    </form>
</body>
</html>