<?php
include "../Database/cate_server.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY CATEGORY PAGE</title>
    <link rel="stylesheet" href="../CSS/cate.css">
</head>
<body>
<section>
        <div class="heading">
            <h2>GAMBELLA UNIVERSITY STOCK INVENTORY MANAGEMENT SYSTEM</h2>
        </div>
    </section>
    <section>
        <div class="main"><br><br><br><br>
            <div class="form1"><br><br>
            <div class="text1">
                <h3>INVENTORY CATEGORY FORM</h3><br>
                <hr>
            </div><br> 
                   <form action="category.php" method="post">
                    <input type="text" name="parentId" placeholder="Enter parent id" required="" ><br><br>
                    <input type="text" name="title" placeholder="Enter  category title" required="" ><br><br>
                    <input type="text" name="metaTitle" placeholder="Enter category metatitle" required="" ><br><br>
                    <input type="text" name="slug" placeholder="Enter category" required="" ><br><br>
                    <input type="text" name="content" placeholder="Enter category content" required="" ><br><br>
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