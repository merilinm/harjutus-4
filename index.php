<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-4 - Andmetüübid (2)</title>
</head>

<body>
    <h2>Arvutamine murd-ja täisarvudega</h2>
    <?php
    $integer = 3;
    echo $float = 3.14;
    echo "<br>";

    echo $float + 7;
    echo "<br>";

	echo "4" / "3";    
    ?>
    
    <h2>Murdarvude ümardamine</h2>
    <?php
    $source = round($float, 1);
    echo "<p>{$source}</p>";
 
    $ceil = ceil($float);
    echo "<p>{$ceil}</p>";

    $floor = floor($float);
    echo "<p>{$floor}</p>";
    ?>

    <h2>Andmetüübi funktsioonid</h2>
    <?php echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
    <?php echo "Kas {$float} on integer? " . is_int($float); ?><br>
    <?php echo "Kas {$integer} on float? " . is_float($integer); ?><br>
    <?php echo "Kas {$float} on float? " . is_float($float); ?><br>
    <?php echo "Kas {$integer} on number? " . is_numeric($integer); ?><br>
    <?php echo "Kas {$float} on number? " . is_numeric($float); ?><br>
</body>
</html>