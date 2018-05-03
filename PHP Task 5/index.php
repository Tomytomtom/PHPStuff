<?php
include 'Car.php';
$beetle = new Car();
$beetle->color = 'red';
$beetle->manufacturer = 'Volkswagen';
$mustang = new Car();
$mustang->color = 'green';
$mustang->manufacturer = 'ford';
$MyCar = new MyCar();
$MyCar->Type = 1;

?>
<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8”>
    <title>Defining and using objects</title>
</head>
<body>
<h2>some properties</h2>
<p>The beetle’s color is <?php echo $beetle->color;?></p>
<p>The Mustang’s manufacturer is <?php echo $mustang->manufacturer;?></p>
<p>The $beetle Object:</p> <pre><?php print_r($beetle);?></pre>
<p>The $mustang Object:</p> <pre><?php print_r($mustang);?></pre>
<p><?php
    Car::$numberSold+=1;
    echo Car::$numberSold; ?>
</p>


    <?php
    switch ($MyCar->Type)
    {
        case Car::HATCHBACK:
            $MyCar->Color = 'Silver';
            $MyCar->Manufacturer = 'Hyundai' ;
            $MyCar->Model = 'i30 N';

            break;
        case Car::STATION_WAGON:
            $MyCar->Color = 'Black';
            $MyCar->Manufacturer = 'Kia' ;
            $MyCar->Model = 'Soul';
            break;
        case Car::SUV:
            $MyCar->Color = 'Blue';
            $MyCar->Manufacturer = 'Audi' ;
            $MyCar->Model = 'Q5';
            break;

    }
    ?>

    <a href="" > </a>
    <a href="" > </a>
    <a href="" > </a>
    <a href="" > </a>
<h2> Properties of cars </h2>
<p class="text">this car’s Color is: <?php echo $MyCar->Color;?></p>
<p class="text">this car’s MPG is: <?php echo $MyCar->Manufacturer;?></p>
<p class="text">this car’s MPG is:<?php echo $MyCar->Model;?></p>
<p class="text">this car’s MPG is: <?php echo $MyCar->displayMpg(3,4);?></p>


</body>
</html>

