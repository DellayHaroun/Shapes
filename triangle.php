/**
 * Created by PhpStorm.
 * User: haroun
 * Date: 29/07/15
 * Time: 11:01
 */
<!DOCTYPE html>
<html>
<head>
    <title>Triangle Surface Calculator</title>
    <meta charset="UTF-8" />
</head>
<body>

<form name="requet" method="post" action="triangle.php">

    <input type="image" src="triangle.png" alt="Triangle" /><br/>
    a: <input type="number" name="a" required/><br/>
    h :<input type="number" name="h" required/><br/>

    <input type="submit" value="send"/>

</form>
<?php
class Triangle extends Shapes
{

    protected function calculSurface()
    {
        // TODO: Implement calculSurface() method.
        return((a*h)/2);
    }
}
$triangle= new Triangle();
$triangle->calculSurface();

?>

</body>
</html>