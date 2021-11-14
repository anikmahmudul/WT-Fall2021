<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>

<div class="header">
  <h1>ABC Management System</h1>
</div>
<div class="header">
  <h3>We create Future</h3>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>

</div>
</div>
<h2>Login</h2>

    <section class="rcorners1">
        <form class="form" action="result.php" method="POST">
            <h1 class="form-heading">Registration Form</h1>
            <hr>
            <div class="fileds">
                <label class="labels" for="firstName">First Name:</label>
                <input name="firstName" id="firstName" type="text" required>
            </div>
            <div class="fileds">
                <label class="labels" for="lasttName">Last Name:</label>
                <input name="lastName" id="lasttName" type="text" required>
            </div>
            <div class="fileds">
                <label class="labels" for="age">Age</label>
                <input name="age" id="age" type="text" required>
            </div>
            <div class="fileds">
                <p class="labels">Designation:</p>
                <div class="filed-item">
                    <input id="junior" name="designation" type="radio" value="Junior Programmer">
                    <label for="junior">Junior Programmer</label>
                    <input id="senior" name="designation" type="radio" value="Senior Programmer">
                    <label for="senior">Senior Programmer</label>
                    <input id="lead" name="designation" type="radio" value="Project Lead">
                    <label for="lead">Project Lead</label>
                </div>
            </div>
            <div class="fileds">
                <p class="labels">Preferrde language</p>
                <div class="filed-item">
                    <input name="java" id="java" type="checkbox" value="JAVA">
                    <label for="java">JAVA</label>
                    <input name="php" id="php" type="checkbox" value="PHP">
                    <label for="php">PHP</label>
                    <input name="c++" id="c++" type="checkbox" value="C++">
                    <label for="c++">C++</label>
                </div>
            </div>
            <div class="fileds">
                <label class="labels" for="email">E-mail:</label>
                <input name="email" id="email" type="email" required>
            </div>
            <div class="fileds">
                <label class="labels" for="password">Password:</label>
                <input name="password" id="password" type="password" required>
            </div>
            <div class="fileds">
                <label class="labels" for="file">Please choose a file</label>
                <input id="file" type="file">
            </div>
            <input name="submit" class="button" type="submit" value="Submit">
            <input name="reset" class="button" type="submit" value="Reset">
        </form>
    </section>
    
</body>
</html>