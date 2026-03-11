<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contoh Soal Looping</h1>
    <?php
    echo "<h3>Contoh Soal 1</h3>";


    echo "<h4>Loping 1</h4>";
    for ($i = 1; $i <= 20; $i += 2) {
        echo "$i - I LOVE PHP <br>";
    }

    echo "<h4>Loping 2</h4>";
    for ($a = 20; $a >= 1; $a -= 2) {
        echo "$a - I LOVE PHP <br>";
    }

    echo "<h3>Contoh Soal 2</h3>";

    $numbers = [18, 45, 29, 61, 47, 34];

    echo "array numbers: ";

    print_r($numbers);

    // Lakukan Looping di sini 
    foreach ($numbers as $n) {
        $item[] = $n % 5;
    }
    echo "<br>";

    echo "Array sisa baginya adalah:  ";

    print_r($item);

    echo "<br>";

    echo "<h3>Contoh Soal 3</h3>";

    $items = [

        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],

        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],

        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],

        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']

    ];

    foreach ($items as $arrayindex) {
        $output = [
            "id" => $arrayindex[0],
            "nama" => $arrayindex[1],
            "price" => $arrayindex[2],
            "description" => $arrayindex[3],
            "source" => $arrayindex[4],
        ];

        print_r($output);
        echo "<br>";

    }

    echo "<h3>Contoh Soal 4</h3>";
    for($j=1; $j<=5; $j++){
        for($k=$j; $k<=5; $k++){
            echo "*";
        }
        echo "<br>";
    }

    ?>

</body>

</html>