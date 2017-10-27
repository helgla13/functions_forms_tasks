
<form action="" method="post">
    <p>Введите текст:</p>
    <textarea name="message" cols="30" rows="10"></textarea>
    <p><input type='submit' value='Отправить'></p>
</form>

<?php
function myfunction($a){
    $b=explode(' ',mb_strtolower($a));
    echo 'Всего слов - '.count($b);
    $b=array_unique($b);
    echo '. Уникальных слов - '.count($b);
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    myfunction($_POST['message']);
}


