<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship">
    <meta name="keywords" content="hng, start, internship, beginner, developer" />
    <meta property="og:title" content="StartNG Certification" />
    <meta property="og:image" content="https://res.cloudinary.com/jeffogah/image/upload/v1564073433/Start_Default.png" />
    <meta property="og:description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship" />
    <title>Certificate</title>

    <!-- CSS and JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ public_path('/css/index.css') }}" />
    {{-- <script src="scripts/index.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
        
        body {
            font-family: 'Lato';
            background-image: url('{{ asset('images/bgg.png') }}');
        }
        h1, h5 {color: #084482;font-weight:bold;}
        h1 {margin-top: 25pt; font-size:48pt;}
        h3 {margin-top: -10pt; font-size: 32pt;color: #FFA800;font-weight:bold;}
        h5 {margin-top: 17pt; font-size: 25pt;}
        p {font-size:14pt;}
        .link {
            margin-top: 17pt;
            font-size: 10pt;
        }
        .link-img {
            float:right;
        }
        .intern-name {
            font-family: 'Calibri', 'Roboto';
        }
        .support {margin: 0 15pt 24pt 0; height: 28pt;}
        @media print {
            button {
                display: none;
            }
        }
        /* @media screen (max-width: 800px;) {
            .container {
                display: none !important;
            }
        } */
    </style>
</head>
<body>
<div class="container" style="" id="content">
<div class="link-img">
    <p class="link">HNG Internship has confirmed the participation of this individual in<br> this program. Confirm at <a href="https://start.ng/verify/{{$data['verify_id']}}">start.ng/verify/{{$data['verify_id']}}</a></p>
    <img src="{{ asset('/images/seal.png') }}" alt="" style="margin: 60pt 0 0 80pt;width:184pt;"><br>
    <!-- <button style="margin: 35pt 0 0 130pt;" class="btn btn-primary" onclick="window.print()"><i class="fa fa-download"></i>&nbsp; DOWNLOAD</button> -->
    <p class="link" style="color: #FFA800;">Note: you can take <b>screenshot</b> of this page on desktop to share <br>on social media or share the link for reference purposes</p>
</div>
    
    <h1>CERTIFICATE</h1>
    <h3>OF COMPLETION</h3>
    <P style="margin-top: 21pt;">This is to certify that</P>
    <p style="font-size:37pt;margin-bottom: 5pt;">{{strtoupper($data['name'])}}</p>
    <p style="margin-bottom: -12pt;">has successfully completed</p>
    <h5>Startdotng (Beginner Software Development Training)</h5>
    <p style="margin-bottom: 30pt;">with {{$data['score']}} out of 100 obtainable points on <strong>21st September, 2019</strong></p>
    <p style="font-size:24pt;margin-bottom: -3pt; font-family: Pacifico, 'Oleo Script';"><i>Seyi Onifade </i></p>
    <p  style="font-size:12pt;margin-top: 0;">CEO, HNG Internship</p>
    <p style="margin-top: 28pt;">Supported by</p>
    <img src="{{ asset('images/hng.png') }}" alt="" class="support">
    <img src="{{ asset('images/hotels.png') }}" alt="" class="support">
    <img src="{{ asset('images/ondo.png') }}" alt="" class="support">
    <img src="{{ asset('images/flutterwave.png') }}" alt="" class="support" style="height: 21pt;">
    <img src="{{ asset('images/chatdesk.png') }}" alt="" class="support" style="height: 21pt;">
    <img src="{{ asset('images/ekiti.jpg') }}" alt="" class="support">
    <img src="{{ asset('images/imo.jpg') }}" alt="" class="support">
</div>

</body>
</html>