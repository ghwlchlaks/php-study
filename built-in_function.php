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

    // 배열 관련 함수

    // count sizeof 함수는 저장된 배열 요소의 개수를 반환
    $arr = array(1,2,3,6 ,4,5);

    echo "배열 요소의 개수는 ".count($arr)."입니다.\n";
    echo "배열 요소의 갯수는".sizeof($arr)."입니다.\n";

    // 배열의 정렬 : sort()
    sort($arr);
    var_dump( $arr);

    // 연관 배열의 정렬
    $arr = array(
        'apple' => 1000,
        'banana' => 2000,
        'orange' => 1500
    );
    asort($arr); // 요소의 값을 기준으로 배열 정렬
    ksort($arr); // 키값을 기준으로 배열 정렬

    // 배열요소의 무작위 재배치
    $arr = array(1,2,3,4,5);
    shuffle($arr);
    var_dump($arr);


    // array_reverse함수는 배열을 복사하여 역순으로된 새로운 배열을 만드는 함수. 즉, 원본배열에는 영향을 주지 않는다. 
    $arr_01 = array(1,2,3,4,5);
    $arr_02 = array_reverse($arr_01);

    foreach($arr_02 as $value) {
        echo $value."\n";
    }


?>