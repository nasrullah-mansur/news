

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reply Massate</title>
</head>
<body>
    Hello {{ $reply['name'] }}!
    <br>
    <br>
    Thank you for your massage
    <br>
    <br>
    {{ $reply['massage'] }}

    <br>
    <br>

    Tnank You
    <br>
    {{ ThemeSetting()->theme_name }}
</body>
</html>
