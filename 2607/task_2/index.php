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

    echo 'Квадрат большего числа равен '.(($_POST['first'] > $_POST['second']) ? $_POST['first'] : $_POST['second'])**2;
    
}
?>