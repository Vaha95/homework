<p><a href="../index.php">Back</a></p>
<form action="index.php" method="post">
<div>
<label for="name">Name</label>
<input type="text" name="user">
</div> 
<div>
<label for="age">Age </label>
<input type="number" name="age">
</div> 
<div></div>
<button name="btn" type="submit">Go</button></form>
<?php 
if(isset($_POST['btn'])&&isset($_POST['user'])&&isset($_POST['age'])){

    echo '<div>Hello! My name is "'.$_POST['user'].'"</div> ';
    echo '<div>I’m '.$_POST['age'].'</div> ';
}
?>