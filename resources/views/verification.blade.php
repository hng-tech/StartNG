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
            font-family: 'Lato', Arial, Helvetica, sans-serif;
            color: #084482;
        }
        h1 { font-weight: bold; margin: 50px 0 30px;}
        .task-details {
            margin: 50px 0;
        }
        footer {
            padding: 10px 0;
            /* position: fixed;
            bottom: 0; */
            color: white;
            text-align:center;
            margin-top: 50px;
            /* margin-bottom: -30px; */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="container-fluid navbar navbar-light mt-sm-2">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/startng.png') }}" alt="" srcset="">
            </a>
            <!-- <button class="btn btn-primary" type="submit">Join</button> -->
        </nav> 
        <div style='text-align:center;'>
            <h1>Cerificate Verification</h1>

            <p>This is to verify that</p>
            <h3> {{$name['name']}} - {{$name['code']}} </h3> 
            <p>participated in</p>
            <h5> StartdotNG (Beginner Software Training)</h5>
            <p> and had a score of</p>
            <h5>{{$name['score']}} ({{$name['grade']}}) <h5>

            


            <div class="row task-details">
                <div class="offset-md-1"></div>
                <div class="col-md-3">
                    <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="task-one-list" data-toggle="list" href="#task-one" role="tab" aria-controls="home">Task 1</a>
                    <a class="list-group-item list-group-item-action" id="task-two-list" data-toggle="list" href="#task-two" role="tab" aria-controls="profile">Task 2</a>
                    <a class="list-group-item list-group-item-action" id="task-three-list" data-toggle="list" href="#task-three" role="tab" aria-controls="messages">Task 3</a>
                    <a class="list-group-item list-group-item-action" id="task-four-list" data-toggle="list" href="#task-four" role="tab" aria-controls="settings">Task 4</a>
                    <a class="list-group-item list-group-item-action" id="task-five-list" data-toggle="list" href="#task-five" role="tab" aria-controls="setting">Task 5</a>
                    </div>
                </div>
                <div class="col-md-7 border">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active text-left" id="task-one" role="tabpanel" aria-labelledby="task-one-list">
                            <h5 class="btn btn-primary bg">Task Description</h5><br>
                            <ul>
                                <li>Create a google doc
                                <li>Write your CV in the document</li>
                                <li>Create a basic html page that says your name, address and phone number</li>
                                <li>Create a github account</li>
                                <li>Create Pivotal Tracker Account</li>
                                <li>Create cloudinary account</li>
                                <li>Update task status on google sheet</li>
                                <li>Create a google sheet, your task submissions should be done on this sheet</li>
                                <li>Visit: timbu.com, make a post about the website on any social media platform. (add a link to the website or a page on the website in your post)</li>
                            </ul>
                            <h6>Grade: {{$name['task1']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade text-left" id="task-two" role="tabpanel" aria-labelledby="task-two-list">
                        <h5 class="btn btn-primary bg">Task Description</h5><br>
                            <ul>
                                <li>Update your html page with the content of your cv (no css, no js).. But make it look presentable with html only. Hint: you can use table.</li>
                                <li>Push the page to Github using the terminal / git bash, do not upload using web view.</li>
                                <li>Write a short article on what you have done so far using google docs.</li>
                                <li>Extra point for creativity.</li>
                                <li>Update task status on google sheet.</li>
                                <li>Make a post on any social media linking to flutterwave.</li>
                                <li>Make a post on any platform linking to timbu.com.</li>

                            </ul>
                            <h6>Grade: {{$name['task2']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade text-left" id="task-three" role="tabpanel" aria-labelledby="task-three-list">
                        <h5 class="btn btn-primary bg">Task Description</h5><br>
                            <ul>
                                <li>Update your CV with some CSS (no frameworks, no js).</li>
                                <li>Be creative and make it look presentable.</li>
                                <li>Update your article from task two on the new things you have learnt.</li>
                                <li>Push your code to github, using a different branch.</li>
                                <li>Create pull request, do not merge. Submit the link.</li> 
                                <li>Extra point for creativity.</li> 
                                <li>Update task status on google sheet.</li> 
                            </ul>
                            <h6>Grade: {{$name['task3']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade text-left" id="task-four" role="tabpanel" aria-labelledby="task-four-list">
                            <h5 class="btn btn-primary bg">Task Description</h5><br>
                            <ul>
                                Create any 1 of the following: Extra point for doing more than required.
                                <li>A simple JS program to produce a multiplication table. The function should accept 2 parameters, beginAt (where the multiplication table should start from) and endAt (where it should end) e.g, if beginAt = 2, and endAt = 6, then the multiplication table displayed should start from 2 X 0 and end at 6 x 12.
                                <li>A JS program that accepts creates an email from first and last name. The function should accept 2 parameters, firstName and lastName, the function should create the email by taking the first letter of firstname, adding it to the full last name, and attach the string (@start.ng) to it. E.g, if firstName = Mike, and lastName = Juma, the function should produce: mjuma@start.ng. Note: email should be lower case.</li> 
                                <li>A JS program that tests if a string is a palindrome.</li> 
                                <li>A JS program that displays the current date and time.</li> 
                                <li>A JS program that takes in a random integer between 1 to 20, the user is then prompted to input a guess number,If the user matches the guess number, the program displays a message “Good work” otherwise, display a message “Not match”.</li> 
                                <li>Post your solution on any online js editor/compiler.</li> 
                                <li>Push your code to GitHub.</li> 
                                <li>Update task status on google sheet.</li> 

                            </ul>
                            <h6>Grade: {{$name['task4']}}/20 </h6>
                        </div>
                        <div class="tab-pane fade text-left" id="task-five" role="tabpanel" aria-labelledby="task-five-list">
                        <h5 class="btn btn-primary bg">Task Description</h5><br>
                            <ul>
                                <li>Update your CV with some JS (no frameworks).</li> 
                                <li>Make a contact page.</li> 
                                <li>The contact form should submit to a JSON file using PHP (no database connection required).</li> 
                                <li>Link to your social media.</li> 
                                <li>Add other things as you wish.</li> 
                                <li>Extra Points for creativity.</li> 
                                <li>Host your CV on GitHub pages.</li> 
                                <li>Update your doc showing what you have learnt so far.</li> 
                                <li>Update your status on task submission sheet.</li> 

                            </ul>
                            <h6>Grade: {{$name['task5']}}/20 </h6>
                        </div>
                    </div>
                </div>
            </div>


            <p>2. 41 - 50 - Pass
            3. 51 - 65 - Credit
            4. 66 - 80 - Upper Credit
            81 - 100 - Distinction</p>
            
            <a href="/certification" >
            <button class="btn btn-primary">Return</button>
            </a>
            
        </div>
    </div>  
    <footer class="bg-primary container-fluid">
        <p>&copy; 2019 HNG Internship. All rights reserved.</p>
    </footer>


    
</body>
</html>