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
            <h1 class="form-heading" style="color:green;">Congratulations</h1>
            <hr>
            <div class="fileds">
                <label class="labels" for="firstName">First Name:</label>
                <p class="values"><?php echo $_SESSION['firstName']; ?></p>
            </div>
            <div class="fileds">
                <label class="labels" for="lasttName">Last Name:</label>
                <p class="values"><?php echo $_SESSION['lastName']; ?></p>
            </div>
            <div class="fileds">
                <label class="labels" for="age">Age:</label>
                <p class="values"><?php echo $_SESSION['age']; ?></p>
            </div>
            <div class="fileds">
                <p class="labels">Designation:</p>
                <div class="filed-item">
                    <p class="values"><?php echo $_SESSION['designation']; ?></p>
                </div>
            </div>
            <div class="fileds">
                <p class="labels">Preferrde language</p>
                <div class="filed-item">
                    <p class="values result-text"><?php echo $_SESSION['java']; ?></p>
                    <p class="values result-text"><?php echo $_SESSION['php']; ?></p>
                    <p class="values result-text"><?php echo $_SESSION['c++']; ?></p>
                </div>
            </div>
            <div class="fileds">
                <label class="labels" for="email">E-mail:</label>
                <p class="values"><?php echo $_SESSION['email']; ?></p>
            </div>
            <input name="reset" class="button" type="submit" value="Reset">
        </form>
    </section>
    
</body>
</html>