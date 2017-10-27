<form action="" method="post">
    <p>Введите текст:</p>
    <textarea name="message" cols="30" rows="10"></textarea>
    <textarea name="text" cols="30" rows="10"></textarea>
    <p><input type='submit' value='Отправить'></p>
</form>


<?php
function getCommonWords($a, $b)
{
    $c = explode(" ", $a);
    $d = explode(" ", $b);
    print_r(array_intersect($c, $d));
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    getCommonWords($_POST['message'],$_POST['text']);
}
