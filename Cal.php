<html>

<head>
<meta name="description" content="amatur calculator php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="calculator,PHP">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>





    <hr>

    <?php
    $x = rand(1, 100);
    $y = rand(1, 100);
    $operator = array("+", "-", "*", "/");

    $op = array_rand($operator);

    print($x);
    print('<br>');

    print($operator[$op]);

    print('<br>');

    print($y);

    print('<hr>');



    if ($operator[$op] == "+") {
        $result =  $x + $y;
        print($result);
    }


    if ($operator[$op] == "*") {
        $result =  $x * $y;
        print($result);
    }


    if ($operator[$op] == "-") {
        $result =  $x - $y;
        print($result);
    }

    if ($operator[$op] == "/") {
        $result =  $x / $y;
        print($result);
    }

    ?>


</body>

</html>