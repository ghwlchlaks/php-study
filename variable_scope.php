<?php 
    /**
     * 변수의 종류
     * 1. 지역 변수 (생략)
     * 2. 전역 변수 (생략)
     * 3. 정적 변수
     */

    //  3. 정적 변수 : 함수 내부에서 호출된 정적 변수는 호출이 종료되더라도 메모리상에서 사라지지 않습니다. 하지만 지역 변수 처럼 해당 함수 내부에서만 접근 할 수 있습니다. 
    // 아래 예제처럼 정적 변수인 $count는 함수 호출이 종료된 이후에도 계속해서 그 값을 유지하고 있습니다.

    function counter() {
        static $count = 0;
        echo "함수 내부에서 호출한 static 변수 count의 값은 {$count} 입니다.\n";
        $count++;
    }

    counter();
    counter();
    counter();

?>