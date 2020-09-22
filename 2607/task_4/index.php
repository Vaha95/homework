<p><a href="../index.php">Back</a></p>
<form action="index.php" method="post">
<div>
<label for="name">first number</label>
<input type="number" name="year">
</div> 
<button name="btn" type="submit">Go</button></form>
<?php 
if(isset($_POST['btn'])&&isset($_POST['year'])){
    $year =$_POST['year'];
    function leapYear($y){
        //echo $y%4;
        if($y % 4 === 0 && $y % 100 !== 0) return 'високосный';
        if($y%400 == 0)return 'високосный';
        return 'не високосный';
    }
    echo $year.' год - '.leapYear($year);    
}
?>