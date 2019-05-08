<?php 
    // 변수 관련 함수
    // gettype() 함수는 전달받은 변수의 타입을 반환합니다. 단, float형의 경우에는 float이 아닌 double을 반환하며 표준 타입이 아닌 경우에는 unknown type을 반환합니다.

    $x = 5;
    echo gettype($x)."\n"; // integer

    // settype() 함수를 사용하면 전달받은 변수의 타입을 변경할 수 있습니다. 이때 변환할 타입으로는  boolean, integer, string, array, object를 사용할 수 있습니다.
    // 또한 float과 null타입도 사용할 수 있습니다. 전달받은 변수의 타입을 성공적으로 변경하면 true을 반환하고, 그러지 못했을 경우에는 false를 반환합니다. 
    settype($x, "string");
    echo gettype($x)."\n"; //string

    // 변수의 상태 변경
    // isset() 함수는 전달받은 변수가 선언되어 있는지를 검사합니다. 선언된 변수가 존재하면true, 존재 하지 않으면 false를 반환.

    // unset() 함수는 전달받은 변수를 제거합니다.

    // empty() 함수는 전달받은 변수가 비어있는지를 검사합니다. 전달받은 변수가 존재하고, 해당 변수가 비어있지 않으면 false를 반환합니다.
    // php에서는 다음값을 가지는 변수를 비어있다고 인식합니다
    /**
     * 정수 0
     * 실수 0.0
     * 문자열 "0"
     * 빈 문자열 ""
     * null
     * false
     * 빈 배열 array()
     * 초기화 되지 않은 변수
     */

    $var;
    var_dump(isset($var)); //false
    var_dump(empty($var)); //true

    echo "------------\n";

    $var = 5;
    var_dump(isset($var)); //true
    var_dump(empty($var)); //false

    echo "------------\n";

    $var = 0;
    var_dump(isset($var)); //true
    var_dump(empty($var)); //true

    echo "------------\n";
    
    unset($var);
    var_dump(isset($var)); //false
    var_dump(empty($var)); //true
?>