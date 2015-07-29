<!DOCTYPE html>
<html>
<head>
    <title>Cirlce Surface Calculator</title>
    <meta charset="UTF-8" />
</head>
<body>

<form name="requet" method="post" action="circle.php">

    r: <input type="number" name="r" required/><br/>


    <input type="submit" value="send"/>

</form>
<?php
class Circle extends Shapes
{

    protected function calculSurface()
    {
        // TODO: Implement calculSurface() method.
        return((r*r)*3.14);
    }
}


?>

</body>
</html>