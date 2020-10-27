<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" />
    <title>Document</title>
</head>
<body>
    <form method="post">
    Количество элементов<input type="number" name="length" id=""><br>
    Диапазон с <input type="number" name="begin" id="">
    по <input type="number" name="end" id=""><br>
    Найти элемент:<input type="number" name="value" id=""><br>
    <input type="submit">
</form>
</body>
</html>
<?php

if($_POST){
    $value = $_POST['value'];
    $length = $_POST['length'];
    $begin = $_POST['begin'];
    $end = $_POST['end'];
    $arr = array($value);
    for($i = 1; $i < $length; $i++){
        array_push($arr, rand($begin, $end));
    }
    echo '<pre>';
    print_r(count($arr));
    echo '<br>';
    print_r($arr);
    echo '</pre>'; 
    
    for($j = 1; $j <= count($arr); $j++){
        for($i = 0; $i < count($arr)-$j; $i++){
            if( $arr[$i] > $arr[$i+1] ){               
                list($arr[$i], $arr[($i+1)]) = array($arr[($i+1)], $arr[$i]);
            }
        }
    }
    echo '<pre>';
    print_r($arr);
    echo '</pre>'; 
    // echo $value;
    

    function nearby($index, $v, $arr){
        echo 'nearby';
        // echo '<br>';
        // echo $arr[$index];
        // echo '<br>';
        // echo $index;
    }

    function search($start, $finish, $val, $arr){
        echo '<br>';
        echo 's'.$start;
        echo '<br>';
        echo 'f'.$finish;
        echo '<br>';
        // echo $val;
        // echo '<br>';
        // print_r($arr);

        $range = $start+floor(($finish-$start)/2)-1;
        echo 'range '.$range;

        if($arr[$range] == $val)
        {
            
            nearby($range, $val, $arr);

        } elseif($arr[$range] > $val) 
        {

            search($start, $range, $val, $arr);

        }elseif($arr[$range] < $val)
        {

            search($range, $finish, $val, $arr);
            
        }

    }
    search(0, count($arr), $value, $arr);
}