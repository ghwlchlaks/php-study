<?php 

    /*
    변수의 선언 
    - php 에서는 달러($) 기호를 사용하여 다음과 같이 변수를 선언
    $변수이름 = 초깃값;

    $var = 10;
    $var = 3.14;
    $var = 'php'

    변수 이름의 생성 규칙
    - 변수의 이름으로 php에서 미리 정의한 $this는 사용 할 수 없다. 

    변수의 초기화 
      타입      기본값
    - boolean   false
    - integer     0
    - float       0.0
    - string    빈 문자열
    - array     빈 배열

     */
    
var_dump($var); // null

echo $bool ? "true" : "false"; // false

$int += 10; var_dump($int); // 0 + 10 =10 , int(10)

$flt += 3.14; var_dump($flt); // 0.0 + 3.14 = 3.14, float(3.14)

$str = "프로그래밍" ; var_dump($str); //string(15), "프로그래밍"

$arr[2] = "2번째 배열 요소"; var_dump($arr); //array(1) {[2] => string(21) "2번째 배열요소"}

?>