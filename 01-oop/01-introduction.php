


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
function add($num1, $num2){
    return $num1 + $num2;
}
echo add(2, 5);

# Object Oriented  Programming
Class Adition {
    public $num1;
    public $num2;

    public function getResult(){
        return ($this->num1 + $this->num2);
    }
}

$sum = new Adition;
$sum->num1 = 1024;
$sum->num2 = 512;
echo "<br>La suma de {$sum->num1} y {$sum->num2} es: " . $sum->getResult();

?>

<main>
        <form action="" method="post">
            <label>
                    <p>Number 1:</p>
                    <input type="range" name="n1" step="1" value="0" max="50" oninput="o1.value=this.value">
                    <output id="o1">0</output>
           </label>
           <label>
                    <p>Number 2:</p>
                    <input type="range" name="n2" step="1" value="0" max="50" oninput="o2.value=this.value">
                    <output id="o2">0</output>
           </label>
           <button>Calcular</button>
           <div class="Result">
                <?php
                  if($_POST){
                    $sum = new Adition;
                    $sum->num1 = $_POST['n1'];
                    $sum->num2 = $_POST['n2'];
                    echo "<br>La suma de {$sum->num1} y {$sum->num2} es: " . $sum->getResult();
                }


                ?>

           </div>



        </form>


    </main>

