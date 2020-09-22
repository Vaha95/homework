<p><a href="../index.php">Back</a></p>
<form action="index.php" method="post"><input type="text" name="user"><button name="btn" type="submit">Go</button></form>
<?php 
if(isset($_POST['btn'])&&isset($_POST['user'])){
    echo 'Hello! My name is "'.$_POST['user'].'"';
}
?>