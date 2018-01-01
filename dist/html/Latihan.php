<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exedrcise</title>
</head>
<body>
    <h1>My First PHP Page</h1>
    <?php 
        echo "My First PHP Script"; 
        echo "Agun Ganteng"; 
        $x = 5 /* + 15 */ + 5; 
        echo $x; 
        echo "<br>"; 
        $color = "red"; 
        echo "My Car is ". $color . "<br>"; 
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h2>" . $txt1 . "</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo $x + $y;  

        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
        
        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);

    ?> 


</body>
</html>