<p><a href="../index.php">Back</a></p>
<form action="index.php" method="post">
<div>
<label for="name">first number</label>
<input type="number" name="first">
</div> 
<div>
<label for="age">second number</label>
<input type="number" name="second">
</div> 
<button name="btn" type="submit">Go</button></form>


<?php 
if(isset($_POST['btn'])&&isset($_POST['first'])&&isset($_POST['second'])){
    $first =  $_POST['first'];
    $second = $_POST['second'];
    if($first%3 == 0 && $second%3 == 0&&$second != 0) 
    {
            echo 'Числа кратны 3, сумма чисел равна '.($first + $second);
    }
    else
    {
        if($second != 0) 
        {
            echo 'Числа не кратны 3, частное(результат деления) чисел равно '.($first / $second);
        }
        else
        {
            echo '<span style="color:red;">Введены некоректные значения</span>';
        }
    }
    
    
}
?>