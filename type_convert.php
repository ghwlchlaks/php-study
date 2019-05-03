<?php 
    // 자동 타입 변환 (type juggling) : php의 타입 강도는 매우 약하며 타입이 상황에 따라서 자동으로 변환됩니다. (동적 타입 언어)
    $var = "문자열";
    $var = 10;
    $var = 3.14;

    // 강제 타입 변환 ( type casting) : php에서는 변수에 값을 대입할 때 마다 변수의 타입이 그것에 맞게 변하게 됩니다. 하지만 사용자가 직접 데이터의 타입을 변환해야하는 경우고 많습니다. 
    $var_01 = 10;
    var_dump($var_01); // int(10)
    $var_02 = (boolean) $var_01;
    var_dump($var_02); // bool(true)

?>