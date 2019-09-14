<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Certificate</title>

    <!-- CSS and JS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="styles/index.css" />
    <script src="scripts/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>


    <style>
        body {
            font-family: 'Lato';
            color: #084482;
        }
        h1 { font-weight: bold; margin-top: 8vh;}
        footer {
            padding: 10px 0 0px;
            position: fixed;
            bottom: 0;
            color: white;
            text-align:center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <nav class="navbar navbar-light mt-sm-2">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/startng.png') }}" alt="" srcset="">
            </a>
            <!-- <button class="btn btn-primary" type="submit">Join</button> -->
        </nav> 
        <div style='text-align:center;'>
            <h1>Cerificate Verification</h1>

            <p>This is to verify that</p>
            <h3> {{$name['name']}} - {{$name['code']}} </h3> participated in StartdotNG (Pre-Internship Program). <br>
            The Candidtae had the following scores for the tasks performed
            Task 1 : {{$name['task1']}} <br>
            Class / Q&A: Introduction and Surviving the Internship. Understanding Slack, Pivotal Tracker, Google Docs, Sheets, getting started with Cloudinary.<Br>
            Task 2 : {{$name['task2']}} <br>
            Task 3 : {{$name['task3']}} <br>
            Task 4 : {{$name['task4']}} <br>
            Task 5 : {{$name['task5']}} <br>
            Score : {{$name['score']}} <br>
            Grade : {{$name['grade']}} <br>

            2. 41 - 50 - Pass
            3. 51 - 65 - Credit
            4. 66 - 80 - Upper Credit
            81 - 100 - Distinction


            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                    </div>
                </div>
            </div>
            
            <a href="/certification" >
            <button class="btn btn-primary">Return</button>
            </a>
            
        </div>
        
    </div>
    <footer class="container-fluid bg-primary">
        <p>&copy; 2019 HNG Internship. All rights reserved.</p>
    </footer>


    
</body>
</html>