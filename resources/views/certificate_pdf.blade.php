{{-- Note : This is the generated PDF page, so it should contain only the design of the certificate --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    THIS IS THE PDF File for {{ strtoupper($data['name']) }}<br> 
    Your SHN CODE is {{ strtoupper($data['code']) }}<br>
    Your SCORE is {{ ($data['task1']/20)*100 }}%<br>
</body>
</html>