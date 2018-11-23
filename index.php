<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <?php 
            // single line
            # or like this
            /*
            */ 
        ?>
        <?php echo "Hello World!"; ?>
        <br>
        <?php echo "Hello" . " world"; ?>
        <br>
        <?php echo 2 + 3; ?>
        <h1><?php echo "Hello" . " world"; ?></h1>
        <?php
            $var = 10;
            echo $var;
            echo "<br>";
            $var = 100;
            echo $var;

            echo "<br>";
            $var = "String";
            echo $var;
            echo "<br>";

            echo "Hello World <br>";
            echo "<br>";
            $greeting = "Hello";
            $target = "world";
            $phrase = $greeting . " " . $target;
            echo $phrase;
        ?>

        <br>

        <?php
            echo $phrase . "new";
            echo "<br>";
            echo '$phrase . "new';
            echo "<br>";
            echo "$phrase . new";
            echo "{$phrase} . new";
        ?>

        <?php
            $first = "first";
            $second = "second";

            $third = $first;
            $third .= $second;

            echo $third;
        ?>
        <br>
        <br>
        <?php echo strtolower($phrase); ?>
        <br>
        <?php echo strtoupper($phrase); ?>
        <br>
        <?php echo ucfirst($phrase); ?>
        <br>
        <?php echo ucwords($phrase); ?>
        <br>
        <br>

        <?php echo strlen($phrase); ?>
        <br>
        <?php echo trim($phrase); ?>
        <br>
        <?php echo strstr($phrase, "wor"); ?>
        <br>
        <?php echo str_replace("Hello", "Barlou", $phrase); ?>
        <br>
        <br>

        <?php echo str_repeat($phrase, 2); ?>
        <br>
        <?php echo substr($phrase, 5, 10); ?>
        <br>
        <?php echo strpos($phrase, "wor"); ?>
        <br>
        <?php echo strchr($phrase, "w"); ?>
        <br>
        <br>

        <?php
            $var1 = 3;
            $var2 = 4;
        ?>
        <?php echo((1 + 2 + $var1) * $var2) / 2 - 5; ?>
        <br>
        <?php echo abs(0 - 300); ?><br>
        <?php echo pow(2, 8); ?><br>
        <?php echo sqrt(100); ?><br>
        <?php echo fmod(20, 7); ?><br>
        <?php echo rand(); ?><br>
        <?php echo rand(1, 10); ?><br>
        <br>
        += : <?php $var2 += 4; echo $var2; ?><br>
        -= : <?php $var2 -= 4; echo $var2; ?><br>
        *= : <?php $var2 *= 4; echo $var2; ?><br>
        /= : <?php $var2 /= 4; echo $var2; ?><br>
        <br>
        <?php $var2++ ; echo $var2; ?><br>
        <?php $var2-- ; echo $var2; ?><br>
        <br>
        <?php echo 1 + "1"; ?><br>
        <br>

        <?php echo $float = 3.14; ?><br>
        <?php echo $float + 7; ?><br>
        <?php echo 4/3; ?><br>
        <br>

        <?php echo round($float, 1); ?><br>
        <?php echo ceil($float); ?><br>
        <?php echo floor($float); ?><br> 
        <br>
        <?php $integer = 3; ?><br> 

        <?php echo "Is {$integer} integer?" . is_int($integer); ?><br> 
        <?php echo "Is {$float} integer?" . is_int($float); ?><br> 
        <br> 

        <?php echo "Is {$integer} float?" . is_float($integer); ?><br> 
        <?php echo "Is {$float} float?" . is_float($float); ?><br> 
        <br> 

        <?php echo "Is {$integer} numeric?" . is_numeric($integer); ?><br> 
        <?php echo "Is {$float} numeric?" . is_numeric($float); ?><br> 
        <br> 

        <?php 

            $numbers = array(4, 8, 15, 16, 23, 42);
            echo $numbers[0];
            echo "<br>";
            echo $numbers[1];

         ?><br> 
         <br>
         <?php 

            $mixed = array(6, "fox", "dog", array("x", "y", "z"));
            echo $mixed[0];
            echo "<br>";
            echo $mixed[3][1];
            echo "<br>";
            echo print_r($mixed);
        ?><br> 

        <pre>
            <?php echo print_r($mixed);?>
        </pre>
        <br> 

        <?php $mixed[2] = "cat" ?><br>
        <?php $mixed[4] = "mouse"?><br>
        <?php $mixed[] = "horse"?><br>
        <pre>
            <?php echo print_r($mixed);?>
        </pre>
        <br> 
        <?php 
            //PHP 5.4
            $array = ["horse", 1, 2]
        ?><br>
        <br> 

        <?php $assoc = array("first_name" => "Kevin", 
                "last_name" => "Skopi"); ?>
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]  ?><br> 
        <?php $assoc["first_name"] = "Larry";?>
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]  ?>
        <?php $numbers = array(0 => 4, 1 => 8); ?><br>
        <?php echo $numbers[0]; ?>
        <br><br>

        <?php $numbers = array(4, 8, 15, 16, 23, 42); ?><br>

        <?php echo count($numbers); ?><br>
        <?php echo max($numbers); ?><br>
        <?php echo min($numbers); ?><br>
        <pre>
            <?php sort($numbers); print_r($numbers); ?><br>
            <?php rsort($numbers); print_r($numbers); ?><br>
        </pre>

        <?php echo $num_string = implode(" * ", $numbers); ?><br>
        <?php echo print_r(explode(" * ", $num_string)); ?><br>
        <br>
        <?php echo in_array(15, $numbers); ?><br>
        <?php echo in_array(19, $numbers); ?><br>
        <br>

        <?php $result1 = TRUE;  $result2 = false; ?>
        <?php echo is_bool($result1); ?>
        <br>

        <?php 
            $number = 3.14;
            if( is_float($number) ) {
                echo "it is a float";
            }
        ?><br><br>

        <?php 
            $var1 = NULL;
            $var2 = "";
         ?>
        <?php echo is_null($var1); ?><br>
        <?php echo is_null($var2); ?><br>
        <?php echo is_null($var3); ?><br>

        <?php echo isset($var1); ?><br>
        <?php echo isset($var2); ?><br>
        <?php echo isset($var3); ?><br>


        <?php $var3 = "0"; ?>
        <?php echo empty($var1); ?><br>
        <?php echo empty($var2); ?><br>
        <?php echo empty($var3); ?><br>

        <?php $count = "2"; ?><br>
        <?php echo gettype($count)?><br>

        <?php $count += 3; ?><br>
        <?php echo gettype($count)?><br>

        <?php $cats = "I have" . $count . " cats."; ?><br>
        <?php echo gettype($cats)?><br>

        <?php settype($count, "integer"); ?><br>
        <?php echo gettype($count); ?><br>

        <?php $count2 = (string) $count; ?><br>
        <?php echo gettype($count); ?><br>
        <?php echo gettype($count2); ?><br>
        <br>

        <?php $test1 = 3; ?>
        <?php $test2 = 3; ?>
        <?php echo settype($test1, "string"); ?><br>
        <?php echo (string) $test2; ?><br>

        <?php 
            $max_width = 980; 

            define("MAX_WITH", 980);
            echo MAX_WITH;
        ?>
        <?php 
            $a = 4;
            $b = 3;

            if ($a > $b) {
                echo "a is equal to b";
            } elseif ($a < $b) {
                echo "a is smaller then b";
            } else {
                echo "a is equal to b";
            }
         ?>
         <br>
         <?php 
            $new_user = true;
            if ($new_user) {
                echo "<h1>Welcome!</h1>";
                echo "<p>We are glad you decided to join us.</p>";
            }
          ?>
          <br>
          <?php 
            $a = 4;
            $b = 3;
            $c = 1;
            $d = 20;
            if (($a > $b) && ($c > $d)) {
                echo "a is equal to b";
            }
           ?>
            <br>
           <?php 
                if(!isset($e)) {
                    $e = 200;
                }
                if (empty($quantity) && !is_numeric($quantity)) {
                    echo "You must enter a quantity.";
                }
            ?>
           <br>
           <?php 
                $a = 3;
                switch ($a) {
                    case 0:
                        echo "a equals 0 <br>";
                        break;
                    case 1:
                    case 2:
                        echo "a equals 1 <br>";
                        break;
                    default :
                        echo "a equals something <br>";
                        break;
                }
            ?><br><br>
            <?php 
                $count = 0;
                while ($count <= 10) {
                    echo $count . ", ";
                    $count++;
                }
                echo "<br>" . $count;
             ?><br><br>

             <?php 
                
                for ($count = 0; $count <= 10; $count++) {
                    echo $count . ", ";
                }
              ?><br><br>
            <?php 
                $ages = array(4, 5, 15, 26, 42, 23);

                foreach ($ages as $age) {
                    echo "Age: {$age}<br>";
                }

                $person = array(
                    "first"=>"Kevin",
                    "last" => "Skot"
                );

                foreach ($person as $attribute => $data) {
                    echo "{$attribute}: {$data}<br>";
                }

             ?><br><br>

             <?php 
                for ($count = 0; $count <= 10; $count++) {
                    if($count == 5) {
                        continue(1);
                    }
                    echo $count . ", ";
                }
              ?><br><br>
              <?php 
                for ($count = 0; $count <= 10; $count++) {
                    if($count == 5) {
                        break;
                    }
                    echo $count . ", ";
                }
              ?><br><br>
              <?php 
                $ages = array(1,2,15,17);
                echo "1: " . current($ages) . "<br>";
                next($ages);
                echo "2: " . current($ages) . "<br>";
                prev($ages);
                echo "2: " . current($ages) . "<br>";
                reset($ages);
                echo "2: " . current($ages) . "<br>";
                end($ages);
                echo "2: " . current($ages) . "<br>";
                next($ages);
                echo "2: " . current($ages) . "<br>";
               ?>
               <?php 
                reset($ages);
               while($age = current($ages)) {
                   echo $age . ", ";
                   next($ages);
               }
               ?><br><br>
               <?php  
                    say_hello("World");
                    function say_hello($word) {
                        echo "Hello {$word}!<br>";
                    }
                    say_hello("World");
                ?><br><br>
                <?php 
                    function add($val1, $val2) {
                        return $sum = $val1 + $val2;
                    }
                    echo $result = add(1, 2);
                 ?><br><br>
                 <?php 
                    function add_subt($val1, $val2) {
                        $sum = $val1 + $val2;
                        $subt = $val1 - $val2;
                        return array($sum, $subt);
                    }
                    $result = add_subt(1, 2);
                    echo $result[0];
                    echo $result[1];
                    echo "<br>";
                    list($add_res, $sub_res) = add_subt(5, 6);
                    echo $add_res;
                    echo $sub_res;
                  ?><br><br>
                <?php 
                    $bar = "outside";
                    function foo($bar) {
                        global $bar;
                        $bar = "inside";
                    }
                    echo $bar ."<br>";
                    foo($bar);
                    echo $bar ."<br>";
                 ?><br><br>
                 <?php 
                    function paint($room="office", $color="red") {
                       return "The color of {$room} is {$color}";
                    }
                    echo paint("bedroom", null) ."<br>";
                    echo paint(null) ."<br>";
                  ?><br><br>
                  <?php 
                    ini_set('display_errors', 'off');
                    error_reporting(E_ALL);
                    if (empty($quantity) && !is_numeric($quantity)) {
                        echo "You must enter a quantity.";
                    }
                    ini_set('display_errors', 'on');
                   ?><br><br>
                   <?php 
                        var_dump($number);
                        echo "<br>";
                        function say_helloy($word) {
                            echo "Hello {$word}!<br>";
                            var_dump(debug_backtrace());
                        }
                        say_helloy("World");
                    ?>
                    <pre>
                        <?php //print_r(get_defined_vars()); ?>
                    </pre>
    </body>
</html>