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


    echo "-----------------\n";

    // 문자열 내장함수
    // 문자열의 길이 : strlen
    $str = 'wkerkj';
    echo strlen($str)."\n";

    echo "-----------\n";

    // 만약 stlen()함수에 영문자가 아닌 한글이 포함된 문자열이 전달된다면 , 문자열의 길이를 반환하는 것이라니라 문자열의 총 바이트 수를 반환합니다.
    // 한글로된 문자열의 길이를 반환받고 싶다면 mb_strlen()을 사용하여 인코딩 형식을 선택 할 수 있습니다.
    $str1 = '한글';
    echo strlen($str1)."\n"; //6
    echo mb_strlen($str1)."\n"; //2
    echo mb_strlen($str1, "UTF-8")."\n"; //2
    echo mb_strlen($str)."\n"; //6

    echo "-------------\n";

    // 문자열 비교하기: strcmp()함수는 전달받은 두 개의 문자열을 서로 비교합니다.
    // 첫번째 인수의 문자열이 두 번째 인수릐 문자열 보다 크면 양수를, 작으면 음수를 반환합니다. 또한 두 문자열의 같이 완전히 같으면 0을 반환합니다.
    // 이때 strcmp는 대 소문자를 비교합니다. 대소문자를 비교하지 않으려면 strncasecmp를 사용합니다.
    //strncasecmp의 세번째 인자는 n바이트까지 인자1,인자2의 값을 비교한다는 인자를 의미합니다.
    echo strcmp('abc', "ABC")."\n"; //1
    echo strncasecmp('abc', "ABC", 6)."\n"; //0

    // strnatcmp함수와 strnatcasecmp함수는 영문자 순으로 문자열을 비교한다는 점
    echo strcmp("2", "10")."\n"; //양수 1
    echo strnatcmp("2", "10")."\n"; //음수 -1

    echo "-------------------\n";

    // 특정 문자열 검색 : strstr, 문자열에서 전달받은 문자열과 처음으로 일치하는 부분을 찾습니다. 일치하는 부분이 존재하면, 처음으로 일치하는 부분을 포함한 이후의 모든 문자를 같이 반환합니다. 하지만 일치하는 부분이 존재하지 않다면 false를 반환합니다. 
    // strstr 함수는 대소문자를 구분하지 않습니다. 
    echo strstr('ABCabcDEFabc', "abc")."\n";

    echo "---------------\n";
    
    // 특정 문자열 위치 찾기 : strpos 함수는 해당 문자열에서 전달받은 문자열과 마지막으로 일치하는 부분의 시작 인덱스를 반환합니다.
    // strrpos함수는 해당 문자열에서 전달받은 문자열과 마지막으로 일치하는 부분의 시작인덱스를 반환합니다
    echo strpos("ABCabcDEFabc", 'abc')."\n"; //3
    echo strrpos("ABCabcDEFabc", "abc")."\n"; //9 

    echo "---------------\n";

    // 문자열 추출하기 : substr 함수는 해당 문자열에서 특정 인덱스부터 전달받은 길이만큼의 일부분을 추출하여 반환합니다.
    $str2 = 'hello world';
    echo substr($str2, 3)."\n"; //4번째 부터 끝까지
    echo substr($str2, -3)."\n"; // 끝에서 부터 3글자
    echo substr($str2, 1, 5)."\n"; // 2번째 문자부터 다섯글자
    echo substr($str2, 1, -5)."\n"; // 2번쨰 문자부터 뒤에서 여섯번째 문자까지
    
    echo "----------------\n";

    // 문자열 대소문자 바꾸기 : strtolower() 함수는 전달받은 문자열의 모든 문자를 소문자로 바꿔줍니다. 또한 strtoupper() 함수는 전달받은 문자열의 모든 문자를 대문자로 바꿔줍니다.
    // ucfirst()함수는 전달받은 문자열의 첫번째 문자만을 대문자로 바꺼줍니다.
    // 또한 ucwords 함수는 전달받은 문자열에서 단어별로 첫번째 문자만을 대문자로 바꿔줍니다.
    echo strtolower('HELLO WORLD')."\n";
    echo strtoupper('hello world')."\n";
    echo ucfirst('hello, world')."\n";
    echo ucwords('hello, world')."\n";

    echo "--------------";

    // 문자열 합치기 explode함수는 특정 문자를 기준으로 전달받은 문자열을 나누어서 하나의 배열로 반환합니다.
    // strtok 함수는 전달받은 문자열을 특정 문자를 기준으로 토큰화합니다. 이 함수는 해당 문자열을 한번에 모두 나누지 않고, 한 번에 하나씩만을 토큰화합니다. 
    $str3 = "hello, beatutiful, world";
    $arr_03 = explode(',', $str3); // , 를 기준으로 문자열을 나눔
    var_dump($arr_03);

    $str4 = implode('!', $arr_03); //!를 기준으로 문자열을 결합함
    echo $str4."\n"; //hello! beatiful! world

    $token = strtok($str4, '!'); //!를 기준으로 토큰화
    echo $token."\n"; // hello

    while ($token != "") {
        $token = strtok('!');  // !를 기준으로 토큰화하고 출력함
        echo $token."\n";
    }

    echo "-------------------------\n";

    // 문자열 대체하기 : str_replace함수는 해당 문자열에서 전달받은 문자열을 모두 찾은 후에, 찾은 문자열을 대체 문자열로 교체합니다. , substr_replace함수는 해당 문자열에서 특정 위치의 문자들을 대체 문자열로 교체합니다. 
    $str5 = 'hello, world';
    echo str_replace('o', '*', $str5)."\n"; //hell*, w*rld
    echo substr_replace($str5, '*', 2)."\n"; // 세번째 문자부터 끝까지를 *로 대체함
    echo substr_replace($str5, '*', -2)."\n"; // 끝에서 두번째 문자부터 끝까지를 *로 대체함
    echo substr_replace($str5, '*', 2, 4)."\n"; // 세번째 문자부터 네글자를 *로 대체함
    echo substr_replace($str5, '*', 2, 0)."\n"; // 두번째 문자부터 문자뒤에 *를 삽입함.

    echo "------------------------\n";

    // 문자열 다듬기 : ltrim함수는 문자열의 앞부분에 있는 공백을 제거하고 ,rtrim함수와 chop함수는 문자열 끝부분에 있는 공백을 제거합니다. 또한 trim 함수는 문자열의 처음과 끝부분에있는 공백을 모두 제거합니다.
    $str6 = ' hello, world ';
    echo $str6."\n";
    echo ltrim($str6)."\n";
    echo rtrim($str6)."\n";
    echo trim($str6)."\n";

    echo "-------------------\n";


    // 삼각함수
    echo sin(pi() / 2)."\n"; // sin(파이/2) == 1
    echo cos(M_PI)."\n";  // cos(파이) == -1
    echo tan(M_PI/4)."\n"; // tan (파이/4) == 1

    // 기타 함수
    echo "0부터 ".getrandmax()."까지의 정수를 하나 무작위로 생성합니다 : ".rand()."\n";
    // getrandmax함수는 rand 함수로 생성할 수 있는 정수의 최댓값을 나타냅니다.

?>