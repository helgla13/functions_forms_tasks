<form action="" method="post">
    <p>Введите текст:</p>
    <textarea name="message" cols="30" rows="10"></textarea>
    <p><input type='submit' value='Отправить'></p>
</form>


<?php
function top($a)
{

    $exp = explode(" ", $a);
    foreach ($exp as $value)
        $c [$value] = strlen($value);
    arsort($c);

    print_r(array_slice($c, 0, 3));
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    top($_POST['message']);
}


