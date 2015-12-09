<!DOCTYPE HTML>
<html>
 <head>
    <meta charset="UTF-8">
    <title>result</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <!--
    Use these if there is no organic bootstrap
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    -->

<?php
include "./header.php";
// File: save-student.php

get_globals();
my_connect();

// Fetch data from the FORM POST data
$Name = $_POST['studentname'];

// Do an UPDATE query to modify the student record

$query = "INSERT INTO ICS415.Students (SID,Name,CreatorID) VALUES (NULL,'$Name','$username')";
$result = try_query($query);

my_disconnect();

?>

</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Student</h1> 
    </div>
    <div class="row">
        <div class="col-sm-4" id="nav">
            <input type="button" class="btngold" onclick="location.href='./about.html';" value="About" />
            <input type="button" class="btngold" onclick="location.href='./create_student.html';" value="New Student" />
            <input type="button" class="btngold" onclick="location.href='./search.html';" value="Search" />
        </div>

        <div class="col-sm-8" id="maincont">
            You have successfully added a student!
            <input type="button" class="btngold" onclick="location.href='./home.php';" value="Home" />
        </div>
    </div>
</div>
<?php
include "./footer.php";
?>
</body>
</html>