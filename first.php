<h1>hello g[ithub</h1>
<?php
if(isset($_POST['submit']))
{
 $value1=$_POST['num1'];
$value2=$_POST['num2'];

$opration=$_POST['operation'];

if($opration=='add')
{
    echo $value1 + $value2;

}
else if($opration=='subtract')
{
     echo $value1 - $value2;
    
}
else if($opration=='multiply')
{
     echo $value1 * $value2;
}
else if($opration=='divide')
{
     echo $value1 / $value2;
}

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <label>Number 1:</label>
    <input type="number" name="num1" step="any" required><br><br>
    <label>Number 2:</label>
    <input type="number" name="num2" step="any" required><br><br>
    <label>Operation:</label>
    <select name="operation" required>
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select><br><br>
    <input type="submit" name="submit" value="Calculate">
</form>
    
</body>
</html>

