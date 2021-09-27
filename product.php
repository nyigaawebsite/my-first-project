
<?php
include "../Database/product_server.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY PRODUCT PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/prod.css">
</head>
<div id="heading">
<h2>GAMBELLLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>

</div>
<body>
    <div class="main"><br><br>
    <div id ="form">
<form method="POST" action="product.php">
        <div id="userform">
            <div id="text"><br><br>
            <h3>INVENTORY PRODUCT FORM</h3><br>
            <hr>
            </div><br>
    
        <label>Title</label><br>
        <input type="text" name="title" placeholder="enter product Title" required=""><br>
         <label>Summary*</label><br>
        <textarea name="summary" id="text1" required=""></textarea><br>
         <label>Type*</label><br>
        <input type="text" name="type" placeholder="enter product Type" required=""><br>
          <label>Created At*</label><br>
        <input type="date" name="createdAt" required="" value="2021-08-04" min="2021-01-01"/><br>
          <label>Updated At*</label><br>
        <input type="date" name="updatedAt" required="" value="2021-08-04" min="2021-01-01"/ ><br>
          <label>Content*</label><br>
          <textarea name="content" id="text1" required=""></textarea><br><br>
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