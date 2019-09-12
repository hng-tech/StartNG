<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship">
  <meta name="keywords" content="hng, start, internship, beginner, developer" />
  <meta property="og:title" content="StartNG" />
  <meta property="og:image" content="https://res.cloudinary.com/jeffogah/image/upload/v1564073433/Start_Default.png" />
  <meta property="og:description" content="HNG Internship 6.0 offers the best on hands practice in the world of programming. Join the pre-internship" />
  <title>StartNG</title>

  <!-- CSS and JS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
  <script src="scripts/index.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>
      .start-info {
      background-image: url("{{ asset('images/laptop.png') }}"),
        radial-gradient(383.23px at 68.61% 55.1%, #5761d7 0%, #24126a 100%);
      background-repeat: no-repeat;
      background-position: 50% 80%;
      min-height: 50vh;
    }
      @media (max-width: 600px) {
      h2 {
        font-size: 1.2em;
      }
      .start-info {
        background-image: url("{{ asset('images/laptop-sm.png') }}"),
          radial-gradient(383.23px at 68.61% 55.1%, #5761d7 0%, #24126a 100%);
        background-position: 50% 100%;
      }
    }
    @media (min-width: 800px) and (max-width: 1024px) {
      .start-info {
        background-image: url("{{ asset('images/laptop.png') }}"),
          radial-gradient(383.23px at 68.61% 55.1%, #5761d7 0%, #24126a 100%);
        background-repeat: no-repeat;
        background-position: center;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid page-wrapper">
    <div class="row content p-0">
      <div class="col-sm-12 col-lg-6 bg-info text-white start-info pt-2 pt-sm-5 p-md-5 pt-sm-0">
        <span><img src="{{ asset('images/start.png') }}" alt="startng" class="img-thumb" />
          <h5 class="d-inline font-weight-bold">Start</h5>
        </span>
        <div class="mt-4">
          <h2 class="font-weight-bold">HNG 6.0 Pre-Internship</h2>
          <small>HNG Internship 6.0 offers the best on hands practice
            in the world of programming. <br />Pre-Internship is for complete beginners who want to learn the basics of software before the internship starts.</small>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6  px-4 pt-2">
        <div class="text-center mt-sm-0 mt-md-5">
          <h5 class="font-weight-bold">Pre-Internship registration has closed</h5>
          <h5 class="font-weight-bold my-3">Visit <a href="https://hng.tech/register">HNG.Tech</a> to register for the main internship</h5>
          <p>Follow us on twitter to get updated news <a href="https://twitter.com/hnginternship"><img src="https://www.itsnicethat.com/system/files/062012/4fd07cea5c3e3c0d810000db/images_slice_large/Twitternew.jpg" width="10%" /></a></p>
        </div>
      </div>
    </div>
    <div class="text-center text-main my-2">
      &copy 2019 HNG internship . All Rights Reserved.
    </div>
  </div>
</body>

</html>