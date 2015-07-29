<!DOCTYPE html>
<html>
<head>
    <title>Surface Calculator</title>
    <meta charset="UTF-8" />
</head>
<body>
<!-- .nav -->
<ul class="nav">
    <li class="item1"><a href="index.php" class="current">Home</a></li>
    <li class="item2"><a href="triangle.php">Triangle</a></li>
    <li class="item3"><a href="rectangle.php">Rectangle</a></li>
    <li class="item4"><a href="circle.php">Circle</a></li>
    <li class="item5"><a href="other.php">Other</a></li>
</ul>
<!-- /.nav -->
<?php

abstract class Shapes
{

    public function printPHP()
    {
        echo 'i am just a Shape' ;
    }
    abstract protected function calculSurface();
}

?>

</body>
</html>