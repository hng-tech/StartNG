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
            padding: 10px 0;
            /* position: fixed;
            bottom: 0; */
            color: white;
            text-align:center;
            margin-top: 50px;
            margin-bottom: -30px;
        }
    </style>
</head>
<body>
        <nav class="container-fluid navbar navbar-light mt-sm-2">
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
            Score : {{$name['score']}} <br>
            Grade : {{$name['grade']}} <br>

            


            <div class=" row ">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="task-one-list" data-toggle="list" href="#task-one" role="tab" aria-controls="home">Task 1</a>
                    <a class="list-group-item list-group-item-action" id="task-two-list" data-toggle="list" href="#task-two" role="tab" aria-controls="profile">Task 2</a>
                    <a class="list-group-item list-group-item-action" id="task-three-list" data-toggle="list" href="#task-three" role="tab" aria-controls="messages">Task 3</a>
                    <a class="list-group-item list-group-item-action" id="task-four-list" data-toggle="list" href="#task-four" role="tab" aria-controls="settings">Task 4</a>
                    <a class="list-group-item list-group-item-action" id="task-five-list" data-toggle="list" href="#task-five" role="tab" aria-controls="setting">Task 5</a>
                    </div>
                </div>
                <div class="col-7 border">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="task-one" role="tabpanel" aria-labelledby="task-one-list">
                            <h5>Task Description</h5>
                            <p>Class / Q&A: Introduction and Surviving the Internship. Understanding Slack, Pivotal Tracker, Google Docs, Sheets, getting started with Cloudinary.</p>
                            <h6>Grade: {{$name['task1']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade" id="task-two" role="tabpanel" aria-labelledby="task-two-list">
                            <h5>Task Description</h5>
                            <p>Class / Q&A: Introduction and Surviving the Internship. Understanding Slack, Pivotal Tracker, Google Docs, Sheets, getting started with Cloudinary.</p>
                            <h6>Grade: {{$name['task2']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade" id="task-three" role="tabpanel" aria-labelledby="task-three-list">
                            <h5>Task Description</h5>
                            <p>Class / Q&A: Introduction and Surviving the Internship. Understanding Slack, Pivotal Tracker, Google Docs, Sheets, getting started with Cloudinary.</p>
                            <h6>Grade: {{$name['task3']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade" id="task-four" role="tabpanel" aria-labelledby="task-four-list">
                            <h5>Task Description</h5>
                            <p>Class / Q&A: Introduction and Surviving the Internship. Understanding Slack, Pivotal Tracker, Google Docs, Sheets, getting started with Cloudinary.</p>
                            <h6>Grade: {{$name['task4']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade" id="task-five" role="tabpanel" aria-labelledby="task-five-list">
                            <h5>Task Description</h5>
                            <p>Class / Q&A: Introduction and Surviving the Internship. Understanding Slack, Pivotal Tracker, Google Docs, Sheets, getting started with Cloudinary.</p>
                            <h6>Grade: {{$name['task5']}}/20 </h6>
                        </div>
                    </div>
                </div>
            </div>


            2. 41 - 50 - Pass
            3. 51 - 65 - Credit
            4. 66 - 80 - Upper Credit
            81 - 100 - Distinction
            
            <a href="/certification" >
            <button class="btn btn-primary">Return</button>
            </a>
            
        </div>
        
    <footer class="container-fluid bg-primary">
        <p>&copy; 2019 HNG Internship. All rights reserved.</p>
    </footer>


    
</body>
</html>