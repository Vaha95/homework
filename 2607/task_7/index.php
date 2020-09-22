<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #item{
            width: 50px;
            height: 50px;
            background-color:green;
            position: relative;
        }
        #err{
            color:red;
        }
    </style>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</head>
<body>
<p><a href="../index.php">Back</a></p>
<input type="number" id='width'>
<input type="number" id='height'>
<button id='btn'>Go</button>
<span id='err'></span>
    <div id='item'></div>    
    <script>            
    $('#btn').on('click',function(){
        $('#err').text('');
    let width = $('#width').val(),
        height = $('#height').val(),
        winWidth = $(window).width(),
        winHeight = $(window).height();
          if((width < winWidth) && (width > 0) && (height < winHeight) && (height > 0)){ 
           $('#item').css('top',`${height}px`).css('left',`${width}px`);
         }else{
             $('#err').text('Заданные координаты недопустимы!');
         }
    })  
    </script>    
</body>
</html>










