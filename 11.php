<?php

$str = 'healthy man - happy man. good health lets us be active, purposeful and cheerful. everybody wants to feel well, but
 sometimes our body doesn’t reciprocate our wish. diseases appear. some of them are temporary (for example: cold, cough,
  running nose, sore throat) diseases, and some are chronic ones.';
function myfunction ($a){

    $splitted = explode(". ", $a);
    for ($i=0; $i<count($splitted); $i++){
        $splitted[$i]=ucfirst($splitted[$i]);
        $stroka = implode('. ', $splitted);
    }
    return $stroka;
}


print_r(myfunction($str));