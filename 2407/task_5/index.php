<p><a href="../index.php">Back</a></p>

<?php 
    echo '<form action="handler.php">';
    echo '<p><b>1. У данного вопроса может быть только 1 ответ. Сколько вариантов ответа может быть на данный вопрос?</b></p>';
     echo '<p><input name="rad" type="radio" value="nedzen">Нет ответа на данный вопрос</p>';
     echo '<p><input name="rad" type="radio" value="dzen">Один</p>';
     echo '<p><input name="rad" type="radio" value="pdzen" checked>Error 418</p>';     
    echo '</form> ';

    echo '<form action="handler.php">';
    echo '<p><b>2. У данного вопроса может быть несколько ответов ответ. Сколько вариантов ответа может быть на данный вопрос?</b></p>';
     echo '<p><input name="check" type="checkbox" value="nedzen">Нет ответа на данный вопрос</p>';
     echo '<p><input name="check" type="checkbox" value="dzen">Несколько</p>';
     echo '<p><input name="check" type="checkbox" value="pdzen">Error 418</p>';     
    echo '</form> ';    
    
    echo '<form action="handler.php">';
    echo '<p><b>3. Ответ нужно ввести вручную</b></p>';
     echo '<p><input name="rad" type="text" value="Answer"></p>';
     echo '</form> ';    
?>