<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment 2</title>
</head>
<body>
    <h1>Loops</h1>
    <h2>Asterisk Patterns</h2>
    
    <h3>Pattern 1</h3>
    <!-- right angled triangle -->
    <?php 
        // no. of iterations (outer loop)
        $n = 10;
        // outer loop (y axis)
        for ($x=0; $x < $n; $x++) 
        { 
            // inner loop (x axis)
            for($y=0; $y <= $x; $y++) 
            { 
                echo "* "; 
            } 
            echo "<br>"; 
        }
    ?>
    
    <h3>Pattern 2</h3>
    <!-- vertically mirrored right angled triangle -->
    <?php 
        // no. of iterations (outer loop)
        $n = 10;
        // outer loop (y axis)
        for ($x=0; $x < $n; $x++) 
        { 
            // iteration for inner loop
            for ($i=$n; $i > 2 * $x - $i; $i--) 
            { 
                echo str_repeat("&nbsp;", 3);
            }
            // inner loop (x axis)
            for($y=0; $y <= $x; $y++) 
            { 
                echo "* "; 
            } 
            echo "<br>"; 
        }
    ?>

    <h3>Pattern 3</h3>
    <!-- equilateral triangle -->
    <?php 
        // no. of iterations (outer loop)
        $n = 10;
        // outer loop (y axis)
        for ($x=0; $x < $n; $x++) 
        { 
            // iteration for inner loop
            for ($i=$n; $i > 2 * $x - $i; $i--) 
            { 
                echo str_repeat("&nbsp;", 3);
            }
            // inner loop (x axis - pattern 2)
            for($y=0; $y <= $x; $y++) 
            { 
                echo "* "; 
            }
            // inner loop (x axis -  pattern 1)
            for($y=1; $y <= $x; $y++) 
            { 
                echo "* "; 
            }
            echo "<br>"; 
        }
    ?>

    <h3>Pattern 4</h3>
    <!-- horizontally mirrored right angled triangle -->
    <?php 
        // no. of iterations (outer loop)
        $n = 10;
        // outer loop (y axis)
        for ($x=$n; $x > 0; $x--) 
        { 
            // inner loop (x axis)
            for($y=0; $y < $x; $y++) 
            { 
                echo "* "; 
            } 
            echo "<br>"; 
        }
    ?>
    
    <h3>Pattern 5</h3>
    <!-- horizontally mirrored vertically mirrored right angled triangle -->
    <?php 
        // no. of iterations (outer loop)
        $n = 10;
        // outer loop (y axis)
        for ($x=$n; $x > 0; $x--) 
        { 
            // iteration for inner loop
            for ($i=$n; $i > 2 * $x - $i; $i--) 
            { 
                echo str_repeat("&nbsp;", 3);
            }
            // inner loop (x axis)
            for($y=0; $y < $x; $y++) 
            { 
                echo "* "; 
            } 
            echo "<br>"; 
        }
    ?>

    <h3>Pattern 6</h3>
    <!-- mirrored equilateral triangle -->
    <?php 
        // no. of iterations (outer loop)
        $n = 10;
        // outer loop (y axis)
        for ($x=$n; $x > 0; $x--) 
        { 
            // iteration for inner loop
            for ($i=$n; $i > 2 * $x - $i; $i--) 
            { 
                echo str_repeat("&nbsp;", 3);
            }
            // inner loop (x axis - pattern 2)
            for($y=0; $y < $x; $y++) 
            { 
                echo "* "; 
            }
            // inner loop (x axis -  pattern 1)
            for($y=1; $y < $x; $y++) 
            { 
                echo "* "; 
            }
            echo "<br>"; 
        }
    ?>

    <h3>Bonus Pattern</h3>
    <!-- diamond -->
    <?php 
        // no. of iterations (outer loop)
        $n1 = 9; // for top half of diamond
        $n2 = 10; // for bottom half of the diamond

        // Top Half
        // outer loop (y axis)
        for ($x=0; $x < $n1; $x++) 
        { 
            // iteration for inner loop
            for ($i=$n1; $i > 2 * $x - $i; $i--) 
            { 
                echo str_repeat("&nbsp;", 3);
            }
            // inner loop (x axis - pattern 2)
            for($y=0; $y <= $x; $y++) 
            { 
                echo "* "; 
            }
            // inner loop (x axis -  pattern 1)
            for($y=1; $y <= $x; $y++) 
            { 
                echo "* "; 
            }
            echo "<br>"; 
        }

        // Bottom Half
        for ($x=$n2; $x > 0; $x--) 
        { 
            // iteration for inner loop
            for ($i=$n2; $i > 2 * $x - $i; $i--) 
            { 
                echo str_repeat("&nbsp;", 3);
            }
            // inner loop (x axis - pattern 2)
            for($y=0; $y < $x; $y++) 
            { 
                echo "* "; 
            }
            // inner loop (x axis -  pattern 1)
            for($y=1; $y < $x; $y++) 
            { 
                echo "* "; 
            }
            echo "<br>"; 
        }
    ?>

</body>
</html>