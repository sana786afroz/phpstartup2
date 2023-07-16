<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartUp with PHP</title>
</head>
<body>
    <div class="container">
        this is my first php website.
        <br/>
        
        <?php
        $var1=23;
        $var2=34;
        echo "this line is  printed using php command";
        echo "<br/>";
        echo "it is used for backend purpose";
        echo "it is dynamically type language";
        echo "it is case sensitive ";
        echo "<br/>";
        echo "sum of var1 and var2 is ";
        // echo $var1+$var2
        echo "<br/>";


       
    //     OPERATORS IN PHP
    //    Airthmatical operators ]
    echo "1:Arithmatical operation in php";
    echo "<br>";
     echo $var1+$var2;
     echo "<br>";
     echo $var1-$var2;
     echo "<br>";
     echo $var1*$var2;
     echo "<br>";
     echo $var1/$var2;
     echo "<br>";

    //    logical operators
    echo " Logical operators in php";
    echo "<br>";
   //&&,||,! and xor operators in  php
//    $var1=(true and true); && operators checks that both the condition should be true
//    $var1=(false and true);
   $var1=(false or false);// || operators  state that if one condition gets wrong then it won't execute
//    $var1=(true and false);
//    $var1=(true or false);
    $var1=(false xor false); // xor operators says that ant one condition should be false then it will give true other wise false.
   echo var_dump($var1); 
   echo "<br>";
    //    comparision OPERATORS
    echo "Comparision operators in php";
    echo "the value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";
    echo "the value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1===4 is";
    echo var_dump(1===4);
    echo "<br>";
    //    assignment operators
    echo "2:Assignment operators in php";
    echo "<br>";
     echo $newvar=$var1;
     echo "<br>";
     echo $var1 +=5;
     echo "<br>";
    //    increment/decrement operators 
    echo "Increment/Decrement operators in php";
    echo "<br>";
    // echo $var1++;
    // echo "<br>";
    // echo $var1;
    // echo "<br>";
    // echo $var1--;
    // echo "<br>";
    // echo $var1;
    echo "<br>";
    echo ++$var1;
    echo "<br>";
    echo $var1;
    // echo "<br>";
    // echo --$var1;
    // echo "<br>";
    // echo $var1;
        ?>
    </div>
</body>
</html>