<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section class="form-section">
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
                <label class="labels" for="age">Age:</label>
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