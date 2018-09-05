<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 05/09/2018
 * Time: 11:49
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP-Calculator</title>
</head>
<body>
<h1 class="heading">Calculator</h1>
    <form action="processing/process.php" method="post">
        <input type="text" name="first_number" placeholder="First Number"/>
        <br />
        <input type="text" name="second_number" placeholder="Second Number" />
        <br />
        <select name="operation" id="">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="submit" value="Calculate" name="submit"/>
    </form>
</body>
</html>