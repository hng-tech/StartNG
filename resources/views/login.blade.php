<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (isset($error))
    <h1>{{$error}}</h1>
    @endif
    <form action="/certification" method="post">
    <input name="shn_code" type="text">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <input type="submit" value="Submit now">
    
    </form>
</body>
</html>