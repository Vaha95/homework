<p><a href="../index.php">Back</a></p>
<form action="index.php" method="post">
<div>
<label for="a">Value a</label>
<input type="number" name="a">
</div> 
<div>
<label for="b">Value b</label>
<input type="number" name="b">
</div> 
<div></div>
<button name="btn" type="submit">Go</button></form>
<?php 
if(isset($_POST['btn'])&&isset($_POST['a'])&&isset($_POST['b'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    
    echo '<div>'.$a.'+'.$b.'='.($a+$b).'</div>';
}
?>