<p><a href="../index.php">Back</a></p>
<form action="index.php" method="post">
<div>
<label for="name">Session id</label>
<p><input type="radio" name="id" value=1>1</p>
<p><input type="radio" name="id" value=0>0</p>
</div> 
<button name="btn" type="submit">Go</button></form>
<?php 
if(isset($_POST['btn'])&&isset($_POST['id'])){
    if($_POST['id'] == 1)
    {
        echo '<span style="color:red;">Вы зарегистрированы, войдите</span>';
    }
    else
    {
        echo '<input type="text" name="login" value="login"></br>';
        echo '<input type="password" name="pass" value="password">';
    }
}

?>