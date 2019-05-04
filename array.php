<?php 
    // php에서는 배열의 특정 인덱스에만 배열 요소를 추가 할 수 있습니다. [배열의 홀(hole)]
    $arr = array();
    $arr[10] =  'banana';

    var_dump($arr); 
    var_dump($arr[0]); //null
    var_dump(isset($arr[0])); // false
    var_dump(isset($arr[10])); // true

    // isset() 함수는 인수로 전달받은 변수가 초기화 되어있는지를 확인해 줍니다.

    // 루프를 이용한 배열 접근
    $arr1 = array(
        'apple',
        'banana',
        'orange'
    );
    $arr1[5] = 'test';

    for ($i=0; $i<count($arr1); $i++) {
        echo $i, " ", $arr1[$i], "\n";
    }


    foreach($arr1 as $value) {
        echo $value, "\n";
    }
    

    // for문을 이용하여 인덱스 접근시 비어있는 인덱스(hole)에 갯수를 가져오지 않습니다. 그래서 할당되어있지 않다는 메시지가 출력됩니다.
    // 이러한 경우에는 foreach를 이용하여 hole이 아닌 배열 요소에만 정확히 접근 할 수 있습니다.

    echo "--------------------------\n";

    // 다차원 배열
    $arr = array( // 1차원 배열을 3개 갖는 2차원 배열 선언
        array(),
        array(),
        array()
    );
    
    
    $arr[0][0] = "apple"; // 배열 요소 입력
    $arr[0][1] = "korea";
    $arr[0][2] = 1000;
    
    
    $arr[1][0] = "banana";
    $arr[1][1] = "philippines";
    $arr[1][2] = 2000;
    
    
    $arr[2][0] = "orange";
    $arr[2][1] = "us";
    $arr[2][2] = 1500;
    
    
    echo $arr[0][0].", ".$arr[0][1].", ".$arr[0][2]."\n";
    echo $arr[1][0].", ".$arr[1][1].", ".$arr[1][2]."\n";
    echo $arr[2][0].", ".$arr[2][1].", ".$arr[2][2]."\n";

    // 1차원 배열과 마찬가지로 2차원 배열을 생성하면서 동시에 배열 요소를 초기화 할 수 있습니다.


?>