{{-- Note : This is the generated PDF page, so it should contain only the design of the certificate --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>

</head>
<body>
    <h1>Certificate</h1>
    <h2>of completion</h2>

    <p>This is to certify that</p>
    <h3>{{ strtoupper($data['name']) }}</h3>
    <p>has successfully completed</p>

    <h4>Startdotng (the HNG Pre-Internship)</h4>
    <p>with {{ ($data['task1']/20)*100 }} points out of 100 on <br>
    <strong>September 8, 2019</strong></p>

    <h3>Seyi Onifade</h3>
    <p>CEO, HNG Internship</p>

    <p>Supported by</p>
    <div>
        <img src="{{ asset('images/hng.png') }}" alt="" srcset="">
        <img src="{{ asset('images/hotetsng.png') }}" alt="" srcset="">
        <img src="{{ asset('images/ondo.png') }}" alt="" srcset="">
        <img src="{{ asset('images/flutterwave.png') }}" alt="" srcset="">
        <img src="{{ asset('images/chatdesk.png') }}" alt="" srcset="">
        <img src="{{ asset('images/imo.png') }}" alt="" srcset="">
    </div>



    THIS IS THE PDF File for {{ strtoupper($data['name']) }}<br> 
    Your SHN CODE is {{ strtoupper($data['code']) }}<br>
    Your SCORE is {{ ($data['task1']/20)*100 }}%<br>
</body>
</html>