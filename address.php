<?php
include "../Database/address_server.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY ADDRESS PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/address.css">
</head>
<div id="heading">
<h2>GAMBELLLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>

</div>
<body>
    <div class="main"><br><br><br>
    <div id ="form">
<form method="POST" action="address.php">
        <div id="userform">
            <div id="text"><br><br>
            <h3>INVENTORY ADDRESS FORM</h3><br>
            <hr>
            </div><br>
        
        <input type="text" name="userId"  placeholder="enter userId" required="">
    
        <input type="text" name="orderId" placeholder="enter  order id" required=""><br>
        
        <input type="text" name="firstName" placeholder="enter user firstname" required="">
        
        <input type="text" name="middleName" placeholder="enter user middle name" required"><br>
        
        <input type="text" name="lastName" placeholder="enter user last name" required="">
       
        <input type="text" name="mobile" placeholder="enter user mobile" required=""><br>

        <input type="text" name="email" placeholder="enter user email" required="">
          
        <input type="text" name="line1" placeholder="enter user first line" required=""><br>
        
        <input type="text" name="line2" placeholder="enter user second line" required="">
        
        <input type="text" name="city" placeholder="enter user city" required=""><br>
       
        <input type="text" name="province" placeholder="enter user province/region" required="">
        
        <input type="text" name="country" placeholder="enter user country" required=""><br>
        <input type="date" name="createdAt" value ="8/10/2021" required="">
        
        <input type="date" name="updatedAt" value ="8/10/2021" required=""><br><br>
        </div>
           <input type="submit" name="Submit" value="Insert" id="sub" />
           <button type="reset" name="clear">Clear</button>

    </form>
    </div>
    </div>
    <div class="foot">
        
        <h2>All &copy copyrights are reserved at Gambella University</h2>
    </div>
 
</body>

</html>