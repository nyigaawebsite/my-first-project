<?php
include "../Database/orderitem_server.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY ORDER-ITEM PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/orderit.css">
</head>
<body>
<section>
        <div class="heading">
            <h2>GAMBELLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>
        </div>
    </section>
    
    <section>
        <div class="main"><br><br><br>
            <div class="form1">
            <div class="text1"><br><br><br>
                <h3>INVENTORY ORDER-ITEM FORM</h3><br>
                <hr>
            </div><br>
                <form action="orderitem.php" method="post">
                    <input type="text" name="productId" placeholder="Enter product id" required="" >
                    <input type="text" name="itemId" placeholder="Enter  item Id" required="" ><br><br>
                    <input type="text" name="orderId" placeholder="Enter order id" required="" >
                    <input type="text" name="sku" placeholder="Enter sku" required="" ><br><br>
                    <input type="text" name="price" placeholder="Enter item price" required="" >
                    <input type="text" name="discount" placeholder="Enter item discount" required="" ><br><br>
                    <input type="text" name="quantity" placeholder="Enter item  quantity" required="" >
                    <input type="text" name="content" placeholder="Enter orderitem content" required="" ><br><br>
                    <input type="date" name="createdAt" placeholder="Enter creation date" required="" >
                    <input type="date" name="updatedAt" placeholder="Enter updation date" required="" ><br><br>
                    <input type="submit" name="submit" value="Insert"  id="but">
                    <input type="reset" value="Clear"  id="but2"><br><br>
                    
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