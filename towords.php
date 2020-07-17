<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Words</title>
</head>
<body>
    <?php
      function toWords($n) {
        $n = (int)$n;

        $keys = array(
          1 => 'one',
          2 => 'two',
          3 => 'three',
          4 => 'four',
          5 => 'five',
          6 => 'six',
          7 => 'seven',
          8 => 'eight',
          9 => 'nine',
          10 => 'ten',
          11 => 'eleven',
          12 => 'twelve',
          13 => 'thirteen',
          14 => 'fourteen',
          15 => 'fifteen',
          16 => 'sixteen',
          17 => 'seventeen',
          18 => 'eighteen',
          19 => 'nineteen',
          20 => 'twenty',
          30 => 'thirty',
          40 => 'forty',
          50 => 'fifty',
          60 => 'sixty',
          70 => 'seventy',
          80 => 'eighty',
          90 => 'ninety',
        );

        if (array_key_exists($n, $keys)){
          return $keys[$n];
        }
        if($n > 20 && $n < 100){
          return toWords(floor($n / 10)*10) . ' ' . toWords($n % 10);
        }
        if($n > 100 && $n < 1000){
          return toWords(floor($n / 100)) . ' hundred ' . toWords($n % 100);
        }
        if($n > 1000 && $n < 100000){
          return toWords(floor($n / 1000)) . ' thousand ' . toWords($n % 1000);
        }
        if($n > 100000 && $n < 10000000){
          return toWords(floor($n / 100000)) . ' lac ' . toWords($n % 100000);
        }
        if($n > 10000000){
          return toWords(floor($n / 10000000)) . ' crore ' . toWords($n % 1000000);
        }
       
        // if (($n > 20) && ($n < 100)) {
        //   $tens = (int)($n / 10) * 10;
        //   $tens = ' ' . $keys[$tens];
        //   $singles = (int) $n % 10;
        //   $singles = ' ' . $keys[$singles] . ' ';
        //   $result = $tens . ' ' . $singles;
        //   return $result;
        // }
      }
            
      $towords = 0;

      if(isset($_POST['towordsSubmit'])){
        $towords = $_POST['towords'];
        echo toWords($towords);
      }
          
          


          // for($i = 1; $i <= 10; $i++){
          //   echo $towords." x " . $i . " = " . $towords*$i . "<br>";
          // };
        
    ?>

    <form method="POST">
      <input type="text" placeholder="Enter your number" name="towords">
      <input type="submit" name="towordsSubmit">
    </form>
</body>
</html>