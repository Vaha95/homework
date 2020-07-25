<p><a href="../index.php">Back</a></p>
<form action="index.php" method="post">
<div>
<label for="name">first number</label>
<input type="number" name="month">
</div> 
<button name="btn" type="submit">Go</button></form>
<?php 
if(isset($_POST['btn'])&&isset($_POST['month'])){
    function dayInMonth($m){
        if($m==1||$m==3||$m==5||$m==7||$m==8||$m==10||$m==12)return 31;
        if($m==4||$m==6||$m==9||$m==11)return 30;
        if($m==2) return '28 (29 в високосный год)';
    }
    echo '<p>Месяц = '.$_POST['month'].'</p>';
    echo '<p>Дней в месяце: '.dayInMonth($_POST['month']).'</p>';
    
}
?>