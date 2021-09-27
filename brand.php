<?php
include "../Database/brand_server.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY BRAND PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/bran.css">
</head>
<div id="heading">
<h2>GAMBELLLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>

</div>
<body>
    <div class="main"><br><br><br>
    <div id ="form">
<form method="POST" action="brand.php">
        <div id="userform">
            <div id="text"><br><br>
            <h3>INVENTORY BRAND FORM</h3><br>
            <hr>
            </div><br>
    
        <label>Title</label><br>
        <input type="text" name="title" placeholder="enter Brand Title" required="required"><br>
         <label>Summary*</label><br>
        <textarea name="summary" id="text1" required="required" placeholder="enter Brand Summary"></textarea><br>
          <label>Created At*</label><br>
        <input type="date" name="createdAt" required="required" value="2021-08-04" min="2021-01-01"/><br>
          <label>Updated At*</label><br>
        <input type="date" name="updatedAt" required="required" value="2021-08-04" min="2021-01-01"/ ><br>
          <label>Content*</label><br>
          <textarea name="summary" id="text1" required="required" placeholder="enter Brand Content"></textarea><br><br><br>
        </div>
           <input type="submit" name="Submit" value="Insert" id="sub" />
           <input type="reset" name="Submit" value="Clear" id="sub2" />
    </form>
    </div>
    </div>
    <div class="foot">
        
        <h2>All &copy copyrights are reserved at Gambella University</h2>
    </div>
 
</body>

</html>