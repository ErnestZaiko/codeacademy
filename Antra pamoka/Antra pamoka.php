<?php

$products = [
[
'name' => 'Siulai', 
'price' => 12.4,
'img' => 'https://siulupinkles.lt/wp-content/uploads/2021/01/Mezgimo-siulai-ritese-italiski-siulai-kasmyras-kasmyro-siulai-silko-siulai-silkas.jpg'
],
[
'name' => 'adata',
'price' => 1.99,
'special price' => 0.99,
'img' => 'https://www.vle.lt/uploads/_CGSmartImage/70839_3-26c56fce05f1ac6e0247f6daa86648aa.jpg'
],
[
'name' => 'virbalai',
'price' => 3.99,
'img' => 'https://mezgimomanija.lt/wp-content/uploads/2019/02/3397.jpg'
],
];


    foreach ($products as $product){
        echo '<img width="150" src="'. $product["img"] .'" />';
        echo '<h2>' . $product["name"] . '</h2>';
        if($product["special_price"]){
            echo '<h2> <del> Price: ' .$product["price"] . '</del></h2>';
            echo '<h2> Special price: ' .$product["special_price"] . '<h2>';
        }else{
            echo '<h2> Price: ' .$product["price"] . '<h2>';
        }
        $product_count++;
        if($product_count % 3 === 0) {
            echo '<hr>';
        }
    }



    for($y = 0; $y < 10; $y++){
        for($x = 0; $x < 10; $x++){
            if($y % 2 == 0) {
                echo '#';
            }
            else {
                if($x % 2 == 1) {
                    echo '#';
                }
                else {
                    echo ' . ';
                }
            }
        }
        echo '<br>';
    }

    for($years = 2015; $years < 2022; $years++) {
        for ($months = 1; $months <= 12; $months++) {
    
                if ($months == 2) {
                    if($years % 4 == 0) {
                        for ($day = 1; $day <= 29; $day++) {
                            echo $years . ' ' . $months . ' ' . $day;
                            echo '<br>';
                        }
                    }else{
                        for ($day = 1; $day <= 28; $day++) {
                            echo $years . ' ' . $months . ' ' . $day;
                            echo '<br>';
                        }
                    }
                } elseif ($months % 2 == 0) {
                    for ($day = 1; $day <= 30; $day++) {
                        echo $years . ' ' . $months . ' ' . $day;
                        echo '<br>';
                    }
                } else {
                    for ($day = 1; $day <= 31; $day++) {
                        echo $years . ' ' . $months . ' ' . $day;
                        echo '<br>';
                    }
            }
        }
    }
    ?>