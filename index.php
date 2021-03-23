<?php

    // Pulling data from the input from
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $message ;

    //Function for calculate

    //If the submit button is clicked
    if(isset($_POST['submit'])) {

        //The arithmetic operator will change depending on the choice
        switch($_POST['operator']) {

            case "+":
                $message = $num1 + $num2;
            break;
            case "-":
                $message = $num1 - $num2;
            break;
            case "*":
                $message = $num1 * $num2;
            break;
            case "/":
                $message = $num1 / $num2;
            break;
            case "%":
                $message = ($num1 * $num2)/100;
            break;

        }


    }








?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>The sum is:<?php echo " ". $message ?></h3>

    <form action="" method="POST">
    
            <input type="text" name="num1">
            <select name="operator">
                <option value="+">Addition(+)</option>
                <option value="-">Substration(-)</option>
                <option value="*">Multiplication(*)</option>
                <option value="/">Divide(/)</option>
                <option value="%">Percentage(%)</option>
            </select>
            <input type="text" name="num2">
            <input type="submit" name="submit" value="submit">
    
    </form>
    
</body>
</html>