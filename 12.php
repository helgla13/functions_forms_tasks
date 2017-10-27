<?php
$str = 'Healthy man - happy man. Good health lets us be active, purposeful and cheerful. Everybody wants to feel well, but
 sometimes our body doesn’t reciprocate our wish. Diseases appear. Some of them are temporary (for example: cold, cough,
  running nose, sore throat) diseases, and some are chronic ones.';
function myfunction ($a){

    $reversed = explode(". ", $a);
    for ($i=0; $i<count($reversed); $i++){
        $reversed=array_reverse($reversed);
        $stroka = implode('. ', $reversed);
    }
    return $stroka;
}


print_r(myfunction($str));