<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment 1</title>
</head>
<body>
    <h1>Arrays</h1>
    <h2>Associative Array</h2>
    <?php
        $peter = array(
            "Science" => 20,
            "Maths" => 18,
            "English" => 15
        );
        $harry = array(
            "Science" => 10,
            "Maths" => 20,
            "English" => 17
        );
        $results = array_merge($peter, $harry);
        print_r($results);
        echo "<br>";

        $tom = array(
            "Science1" => 20,
            "Maths1" => 18,
            "English1" => 15
        );
        $dick = array(
            "Science2" => 10,
            "Maths2" => 20,
            "English2" => 17
        );
        $results = array_merge($tom, $dick);
        print_r($results);
    ?>

    <h2>Multidimentional Array</h2>
    <?php 
        $mda = array(
            "Results" => array(
                "Tom" => array(
                    "Science" => 20,
                    "Maths" => 18,
                    "English" => 15,
                ),
                "Dick" => array(
                    "Science" => 10,
                    "Maths" => 20,
                    "English" => 17,
                ),
                "Harry" => array(
                    "Science" => 17,
                    "Maths" => 19,
                    "English" => 16,
                )
            )
        );
        print_r ($mda);

        print "<br>" . "Students Results:" . "<br>";
        print "Tom";
        print_r ($mda["Results"]["Tom"]);
        print "<br>" . "Dick";
        print_r ($mda["Results"]["Dick"]);
        print "<br>" . "Harry";
        print_r ($mda["Results"]["Harry"]);
        
    ?>
</body>
</html>