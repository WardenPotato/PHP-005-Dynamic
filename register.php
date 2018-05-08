<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
        body {
            background-color: gray;
        }
        #wrapper {
            position: absolute;
            top: 50%;
            margin-top: -200px;
            /* half of #content height*/
            left: 0;
            width: 100%;
        }

        #content {
            width: 624px;
            margin-left: auto;
            margin-right: auto;
            /*height: 39px;*/
            background-color: lightgray;
            padding: 30px;
        }
    </style>
    <title>Register</title>
</head>
<body>
<div id="wrapper">
    <div id="content" class="border border-secondary rounded">
        <form method="post">
            <div class="form-group">
                <label for="InputEmail">Email address</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="InputEmail1" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="InputPassword1">Password</label>
                <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="InputPassword" required>
            </div>
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" id="InputName" placeholder="Name" name="InputName" required>
            </div>
            <div class="form-group">
                <label for="InputAddress">Address</label>
                <input type="text" class="form-control" id="InputAddress" placeholder="Address" name="InputAddress" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submitButton">Register</button>
        </form>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST["submitButton"])){
    if (!empty($_POST["InputEmail1"]) and !empty($_POST["InputPassword"]) and !empty($_POST["InputName"]) and !empty($_POST["InputAddress"])){
        print_r($_POST);
    }else{
        echo"Not everything is filled in";
    }
}