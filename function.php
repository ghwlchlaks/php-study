<?php 
    // 함수의 값 반환 : php 7부터는 함수의 반환값을 원하는 타입으로 반환 받을 수 있도록 반환타입을 지정할 수 있습니다.

    function sum($x, $y) : float // 반환의 타입을 float타입으로 설정
    {
        return $x + $y;
    }

    var_dump(sum(3,4));
    // => float(7)

    // 참조 전달 : c언어와 같이 주소를 전달 call by reference
    function increment_ref(&$para) {
        $para++;
    }
    $value = 1;
    increment_ref($value);
    echo $value."\n";
    // => 밖에있는 $value값이 변경됨 2


    // 일반 값 전달 call by value
    function increment($para) {
        $para++;
    }
    increment($value);
    echo $value."\n";
    // 밖에 있는 $value값이 변경되지 않음 2

?>