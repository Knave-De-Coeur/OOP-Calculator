<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 05/09/2018
 * Time: 12:19
 */

include '../includes/calculator.php';

if (!isset($_POST['submit'])){
    die("Error: Submit button not clicked!");
}

$firstNumber = $_POST['first_number'];
$secondNumber = $_POST['second_number'];
$operation = $_POST['operation'];

$calculator = new Calculator($firstNumber, $secondNumber, $operation);

$result = $calculator->ActualCalculation();

echo $result;