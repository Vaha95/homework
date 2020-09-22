<p><a href="../index.php">Back</a></p>

<form action="index.php" method="post">

<div>
<label for="bg"><p>Background color</p></label>
<p><input type="radio" name="bg" value='Red'>Red</p>
<p><input type="radio" name="bg" value='Green'>Green</p>
<p><input type="radio" name="bg" value='Blue'>Blue</p>
</div>

<div>
<label for="color"><p>Color text</p></label>
<p><input type="radio" name="color" value='Red'>Red</p>
<p><input type="radio" name="color" value='Green'>Green</p>
<p><input type="radio" name="color" value='Blue'>Blue</p>
</div> 

<div>
<label for="width"><p>Width block</p></label>
<input type="number" name="width">
</div>

<div>
<label for="height"><p>Height block</p></label>
<input type="number" name="height">
</div>

<button name="btn" type="submit">Go</button>

</form>

<?php 
if(isset($_POST['btn'])&&isset($_POST['bg'])&&isset($_POST['color'])&&isset($_POST['width'])&&isset($_POST['height'])){
    
    echo '<div style="width:'.$_POST['width'].'px; height: '.$_POST['height'].'px; background-color:'.$_POST['bg'].'; color: '.$_POST['color'].' ">Hello</div>';
}
?>