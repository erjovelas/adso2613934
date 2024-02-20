<?php
#Linear Programing //se da en cascada de arriba hacia abajo, resulta util en 
$num1 = 54;
$num2 = 32;

echo "Result: " .$num1 * $num2; 

echo"{$num1}*{$num2}=".($num1*$num2); //curly braces are used to
echo"<br>";

$string = "Hello";
echo" MD5($string) =  ".md5($string);
echo"<br>";
echo"PASSWORD_HASH({$string}) = " . password_hash($string, PASSWORD_DEFAULT);
echo"<br>";
$hash= password_hash($string, PASSWORD_DEFAULT);
if (password_verify($string, $hash)){
    echo "Verified Succesful!";
}
# Structured Programing


# Object Oriented  Programming
?>


