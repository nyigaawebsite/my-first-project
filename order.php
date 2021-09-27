<?php
include "../Database/order_server.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY ORDER PAGE</title>
    <link rel="stylesheet" type="text/css" href="../CSS/order.css">
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
                    <input type="text" name="userId" placeholder="Enter user id" required="" >
                    <input type="text" name="type" placeholder="Enter  order type" required="" ><br><br>
                    <input type="text" name="status" placeholder="Enter order status" required="" >
                    <input type="text" name="subTotal" placeholder="Enter order subtotal" required="" ><br><br>
                    <input type="text" name="itemDiscount" placeholder="Enter order item discount" required="" >
                    <input type="text" name="tax" placeholder="Enter order tax" required="" ><br><br>
                    <input type="text" name="shipping" placeholder="Enter order shipping" required="" >
                    <input type="text" name="total" placeholder="Enter order total" required="" ><br><br>
                    <input type="text" name="promo" placeholder="Enter order promo" required="" >
                    <input type="text" name="discount" placeholder="Enter order discount" required="" ><br><br>
                    <input type="text" name="grandTotal" placeholder="Enter order grandtotal" required="" >
                    <input type="text" name="content" placeholder="Enter order content" required="" ><br><br>
                    <input type="date" name="createdAt" placeholder="Enter creation date" required="" >
                    <input type="date" name="updatedAt" placeholder="Enter updation date" required="" ><br><br><br>
                    <input type="submit" name="submit" value="Insert"  id="but">
                    <input type="reset" value="Clear"  id="but2">
                    
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