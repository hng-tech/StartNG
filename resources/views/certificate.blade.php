<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Your NAME is {{ strtoupper($name['name']) }}<br>
    Your SHN CODE is {{ strtoupper($name['code']) }}<br>
    Your SCORE is {{ ($name['task1']/20)*100 }}%<br>

    <a href="/certification/{{$name['slug']}}/download">Download PDF</a>
</body>
</html>