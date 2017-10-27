<form action="" method="post">
    <p>Введите текст:</p>
    <textarea name="message" cols="30" rows="10"></textarea>
    <p><input type='submit' value='Отправить'></p>
</form>


<?php
function perevorot($a){
    $a=strrev($a);
    echo $a;
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    perevorot($_POST['message']);
}

