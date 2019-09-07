{{-- Note : This is the generated PDF page, so it should contain only the design of the certificate --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>  -->

    <style>
    @media print {
        body {
            width: 872pt;
            height: 595pt;
            font-family: 'Roboto';
        }
        h1, h2, h4 { color: blue; margin-bottom:-20px;}
        .support {
            display: inline-block;
            height: 50pt;
        }
    }
    </style>
</head>
<body >
  <div style="width: 872pt;background-color: #ff3; height: 595pt; font-family: 'Arial';">  
    <h1 style="color: blue; margin-bottom:-20px;">CERTIFICATE</h1>
    <h2 style="color: blue; margin-bottom:-20px;">OF COMPLETION</h2>

    <p>This is to certify that</p>
    <h3>{{ strtoupper($data['name']) }}</h3>
    <p>has successfully completed</p>

    <h4 style="color: blue; margin-bottom:-20px;">Startdotng (the HNG Pre-Internship)</h4>
    <p>with {{ ($data['task1']/20)*100 }} points out of 100 on <br>
    <strong>September 8, 2019</strong></p>

    <h3>Seyi Onifade</h3>
    <p>CEO, HNG Internship</p>

    <p>Supported by</p>
    <!-- <div class="support">
        <img src="{{ asset('images/hng.png') }}" alt="hng logo" srcset="">
        <img src="{{ asset('images/hotetsng.png') }}" alt="hotels.ng logo" srcset="">
        <img src="{{ asset('images/ondo.png') }}" alt="ondo state logo" srcset="">
        <img src="{{ asset('images/flutterwave.png') }}" alt="flutterwave logo" srcset="">
        <img src="{{ asset('images/chatdesk.png') }}" alt="chatdesk logo" srcset="">
        <img src="{{ asset('images/imo.png') }}" alt="imo state logo" srcset="">
    </div> -->

  </div>
</body>
</html>