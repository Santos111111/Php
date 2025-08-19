<!--hello world! 

<h1>Hello World!</h1>

<style>
    h1{
        color: blue;

    }
</style>

<script>
    alert("Hello World!")
</script>
-->

<?php 
// echo "Hello World!"
# echo "Hello World!"

/* echo "Hello World!" 
 echo "Hello World!" 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This my first PHP page!!!!</h1> -->
    <?php 
    // echo "Hello World!";

    //variable
    // $a = 5;
    // var_dump($a);

    // var_dump("John");
    // var_dump(3.14);
    // var_dump(true);
    // var_dump([1,2,3]);
    // var_dump(null);
    
    // variable scope
    // $a = 5;

    

    // function test()
    // {
    //     static $a = 6;
    //     echo $a;
    //     echo "<br>";
    //     $a++;
    // }
    //  test();
    //  test();
    //  echo $a;

    // echo & print

    // echo ("Hello! <br>"), ("Hello! <br>");
    // echo "world! <br> ", "world! <br> ";
    // print ("Hello! <br>");
    // print "Hello! <br> ";    
    // echo print("Hi")

    // Data Types
    // $a = "John";
    // $b = 5;
    // $c = 3.14;
    // $d = true;
    // $e = [1,2,3];
    // $f = new stdClass();
    // $g = null;
    // $h = fopen("php_practice.php", "r");

    // var_dump($a);
    // echo "<br>";
    //   var_dump($b);
    // echo "<br>";
    //   var_dump($c);
    // echo "<br>";
    //   var_dump($d);
    // echo "<br>";
    //   var_dump($e);
    // echo "<br>";
    //   var_dump($f);
    // echo "<br>";
    //   var_dump($g);
    // echo "<br>";
    //   var_dump($h);
    // echo "<br>";

    // strings
    // $a = "blue";
    // $name = "<h1 style='color:$a'>John Doe";
    
    $name = "John Doe";

    echo strlen($name), "<br>";
    echo str_word_count($name), "<br>";
    echo strpos($name, "Doe"), "<br>";
    echo strtoupper($name), "<br>";
    echo strtolower($name), "<br>";
    echo str_replace("Doe", "Cruz",$name), "<br>";
    echo strrev($name), "<br>";
    echo trim($name), "<br>";
     echo explode("", $name), "<br>";





    ?>
    
</body>
</html>