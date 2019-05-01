<?php
    // 상수(constant)란 변수와 마찬가리고 데데터를 저장 할 수 있는 메모리 공간을 의미합니다. 
    // 하지만 상수가 변수와 다른점은 한 번 선언되면, 스크립트가 실행되는 동안 그 데이터를 변경하거나 해제 할 수 없다는 점.

    // define() 함수 : php에서는 define() 함수를 사용하여 상수를 선언 할 수 있습니다. 
    define('PHP', 'php 상수 입니다.');
    echo PHP, "\n";
    // php 상수 입니다. 

    // 마법 상수(magic constants) : php는 어느 곳에서도 사용 할 수 있는 미리 정의된 다양한 상수를 제공
    echo __LINE__, "\n"; // 현재 라인 번호
    echo __FILE__, "\n"; // 파일 경로
    echo __DIR__, "\n";  // 파일의 디렉토리
    echo __FUNCTION__, "\n"; // 함수의 이름
    echo __CLASS__, "\n"; // 클래스의 이름
    echo __METHOD__, "\n"; // 클래스의 메소드 이름
    echo __NAMESPACE__, "\n"; // 현재 네임스페이스

?>
