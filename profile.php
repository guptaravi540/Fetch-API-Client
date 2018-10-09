<!doctype html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" media="screen and (min-width: 200px) and (max-width: 700px)"
        href="css/small_screen.css">
    <link rel="stylesheet" media="screen and (min-width: 500px) and (max-width: 700px)"
        href="css/medium_screen.css">

</head>

<body>
    <!-- header of the page-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="/">StackOverflow Lite</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profile.html">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ask-question.html">Ask a Question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my-questions.html">My Questions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="all-questions.html">All Questions</a>
                </li>
                <li class="nav-item"></li>
                <a class="font-weight-bold nav-link" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="font-weight-bold nav-link" href="signup.html">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container pt-3">
        <div class="col">
            <div class="Profile">
                <span>
                    // Check if the form is submitted if 
                    isset( $_POST['submitSignup()']  
                    // retrieve the form data by using the element's name attributes value as key 
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname']; 
                    // display the results
                    echo 'Welcome ' . $firstname . ' ' . $lastname;
                    exit;
                </span>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="scripts/misc.js"></script>
    <script defer type="text/javascript" src="scripts/queries.js"></script>
    <script defer type="text/javascript" src="scripts/profile.js"></script>
</body>

</html>
