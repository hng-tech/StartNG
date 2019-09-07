<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship">
    <meta name="keywords" content="hng, start, internship, beginner, developer" />
    <meta property="og:title" content="StartNG Certification" />
    <meta property="og:image" content="https://res.cloudinary.com/jeffogah/image/upload/v1564073433/Start_Default.png" />
    <meta property="og:description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship" />
    <title>Certification</title>

    <!-- CSS and JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <script src="scripts/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-light mt-sm-2">
            <a class="navbar-brand" href="#">
                <img src="./startng.png" alt="" srcset="">
            </a>
            <button class="btn btn-primary" type="submit">Join</button>
        </nav>
        <img src={{asset('image/startng.png') }} alt="" srcset="" height="50px">
        <div style='text-align:center;'>
            <h1>HNG-Internship Certification</h1>
            <p>We look out for the best interns who have been tested with real life projects</p>
            @if (isset($error))
            <h6>{{$error}}</h6>
            @endif
            <form action="/certification" method="post" class="form-inline mr-auto ml-auto">
            <input class="form-control mr-sm-2 " type="text" name="shn_code" placeholder="Input your shn code" aria-label="Search">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> SEARCH</button>
            </form>
            
            <footer class="bg-primary">
                <p>&copy; 2019 HNG Internship. All rights reserved.</p>
            </footer>
        </div>
        
    </div>
    
</body>
</html>