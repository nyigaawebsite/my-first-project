
<?php

include "../Database/code.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY LOGIN PAGE</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <section>
        <div class="heading">
            <h2>GAMBELLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>
        </div>
    </section>
    <section>
        <div class="main"><br><br><br>
            <div class="form1"><br><br>
            <div class="text1">
                <h3>INVENTORY LOGIN FORM</h3><br>
                <hr>
            </div><br>
                <form action="index.php" method="post">
                    <input type="text" name="username" placeholder="Enter user name" required="" ><br><br>
                    <input type="password" name="password" placeholder="Enter password" required="" ><br><br>
                    <label for="">Choose your role here:</label><br><br>
                    <input type="radio" name="usertype" id="role" value="Admin" required="" >&nbsp; Admin|
                    <input type="radio" name="usertype" id="role" value="Customer" required=""  >&nbsp; Customer|
                    <input type="radio" name="usertype" id="role" value="Salesperson" required="" >&nbsp; Salesperson|<br><br>
                    <input type="submit" name="submit" value="Login"  id="but"><br><br>
                    <p>Click Create Account to Register</p><br>
                    <a href="signup.php">Create Account</a>
                </form>
            </div>
        </div>
    </section>
    <section>
        <div class="footer">
            <h2>ALL &copy COPYRIGHTS ARE RESERVED AT GAMBELLA UNIVERSITY</h2>
        </div>
    </section>
</body>
</html>