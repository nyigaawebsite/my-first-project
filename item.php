<?php
include "../Database/item_server.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY ITEM PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/item.css">
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
                <h3>INVENTORY ITEM FORM</h3><br>
                <hr>
            </div><br>
                <form action="item.php" method="post">
                    <input type="text" name="productId" placeholder="Enter product id" required="" >
                    <input type="text" name="brandId" placeholder="Enter  band Id" required="" ><br><br>
                    <input type="text" name="supplierId" placeholder="Enter supplier id" required="" >
                    <input type="text" name="orderId" placeholder="Enter order id" required="" ><br><br>
                    <input type="text" name="sku" placeholder="Enter sku" required="" >
                    <input type="text" name="mrp" placeholder="Enter your mrp" required="" ><br><br>
                    <input type="text" name="discount" placeholder="Enter item discount" required="" >
                    <input type="text" name="price" placeholder="Enter item price" required="" ><br><br>
                    <input type="text" name="quantity" placeholder="Enter item  quantity" required="" >
                    <input type="text" name="sold" placeholder="Enter number of items sold" required="" ><br><br>
                    <input type="text" name="available" placeholder="Enter nuber item available" required="" >
                    <input type="text" name="defective" placeholder="Enter number of item defected" required="" ><br><br>
                    <input type="text" name="createdBy" placeholder="Enter name of person" required="" >
                    <input type="text" name="updatedBy" placeholder="Enter name of person" required="" ><br><br>
                    <input type="date" name="createdAt" placeholder="Enter creation date" required="" >
                    <input type="date" name="updatedAt" placeholder="Enter updation date" required="" ><br><br><br>
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