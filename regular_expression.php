<?php 
/**
 * php에서는 다음과 같은 두가지의 정규 표현식을 지원합니다.
 * posix, pcre
 * posix 정규 표현식은 배우기가 쉽고 실행속도가 빠른 편. 
 * 그에 비해 pcre정규표현식은 posix정규 표현식을 확장하였기에 더 강력하고 유연하게 동작
 */

//  정규 표현식의 리터럴 : /검색패턴/플래그

// preg_match 함수 : 해당 문자열에서 전달받은 정규 표현식과 일치하는 패턴을 검색합니다. 
$subject = "간장 공장 공장장은 강 공장장이고, 된장 공장 공장장은 장 공장장이다.";


if (preg_match('/공장/', $subject)) {
    echo "해당 문자열에서 '공장'을 발견했습니다.\n";
} else {
    echo "해당 문자열에서 '공장'을 발견하지 못했습니다.\n";
}

if (preg_match('/장공/', $subject)) {
    echo "해당 문자열에서 '장공'을 발견했습니다.\n";
} else {
    echo "해당 문자열에서 '장공'을 발견하지 못했습니다.\n";
}


// 플래그(flags)
/**
 * i	검색 패턴을 비교할 때 대소문자를 구분하지 않도록 설정함.
 * g	검색 패턴을 비교할 때 일치하는 모든 부분을 선택하도록 설정함.
 * m	검색 패턴을 비교할 때 여러 줄의 입력 문자열을 그 상태 그대로 여러 줄로 비교하도록 설정함.
 * y	대상 문자열의 현재 위치부터 비교를 시작하도록 설정함.
 * u	대상 문자열이 UTF-8로 인코딩된 것으로 설정함.
 */
$subject = "bcabcAB";
// 기본 설정으로 검색 패턴을 비교할 때 대소문자를 구분함.
preg_match_all('/AB/', $subject, $matches_01);      // "AB"
var_dump ($matches_01);
// 검색 패턴을 비교할 때 대소문자를 구분하지 않도록 설정함.
preg_match_all('/AB/i', $subject, $matches_02); // "ab", "AB"
var_dump($matches_02);

// 특수 문자 
/*
* /.ap/         // 문자열 "ap" 앞에 임의의 한 문자가 등장하는 문자열 : aap, bap, cap, @ap, #ap, ...
* /a?b/         // b 앞에 a가 0번 또는 1번 등장하는 문자열 : b, ab
* /a*b/         // b 앞에 a가 0번 이상 등장하는 문자열 : b, ab, aab, aaab, ...
* /a+b/         // b 앞에 a가 1번 이상 등장하는 문자열 : ab, aab, aaab, aaaab, ...
* /a{2,4}b/     // b 앞에 a가 2번 이상 4번 이하 등장하는 문자열 : aab, aaab, aaaab
* /a{2,}b/      // b 앞에 a가 2번 이상 등장하는 문자열 : aab, aaab, aaaab, aaaaab, ...
* /^abc/        // abc로 시작하는 문자열 : abc, abcd, abcdef, ...
* /abc$/        // abc로 끝나는 문자열 : abc, zabc, xyzabc, ...
* /abc|def|ghi/ // abc, def 또는 ghi 중 하나의 문자열
*/

// 양화사 : 특수문자로 수량을 나타내는 다양한 양화사를 사용 할 수 있습니다.
/**
 * - '*'는 바로 앞의 문자가 0번 이상 나타날 경우를 검색합니다. ({0, }와 같음)
 * '+'는 바로 앞의 문자가 1번 이상 나타날 경우를 검색합니다. ({1, }과 같음)
 * '?'는 바로 앞의 문자가 0번 또는 1번만 나타날 경우를 검색합니다. ({0,1}과 같음)
 * '{n,m}'은 바로 앞의 문자가 반복되는 횟수를 지정합니다.
 *  바로 앞의 문자가 최소 n번이상 최대 m번이하로 나타날 경우를 검색합니다. (n과 m은 반드시 양의 정수이어야만 함)
 * 
 */

$subject = "PHP is cooooool!";
// 문자 'l' 바로 앞에 문자 'o'가 0 또는 1번 나타나는 경우를 검색함.
preg_match_all('/o?l/', $subject, $match_01);
// 문자 'l' 바로 앞에 문자 'o'가 0번 이상 나타나는 경우를 검색함.
preg_match_all('/o*l/', $subject, $match_02);
// 문자 'l' 바로 앞에 문자 'o'가 1번 이상 나타나는 경우를 검색함.
preg_match_all('/o+l/', $subject, $match_03);
// 영문 소문자가 1번 이상 나타나는 경우를 검색함.
// 즉, 영문 소문자만으로 이루어진 부분 문자열을 검색함.
preg_match_all('/[a-z]+/', $subject, $match_04);
// 문자 'l' 바로 앞에 문자 'o'가 최소 2번 이상 최대 4번 이하로 나타나는 경우를 검색함.
preg_match_all('/o{2,4}l/', $subject, $match_01);

// 정규 표현식의 활용
// 전화 번호 확인
$tel = "02-1234-5678";

$cell = "010-1234-5678";

 

$pattern_01 = "/^[[:digit:]]{2}\-[[:digit:]]{4}\-[[:digit:]]{4}/";

if (preg_match($pattern_01, $tel, $matches_01)) {

    var_dump($matches_01);

} else {

    echo "{$tel}은 유효한 형식의 전화번호가 아닙니다.<br>";

}

echo "-----------------------\n";
if (preg_match($pattern_01, $cell, $matches_02)) {
    var_dump($matches_02);
} else {
    echo "{$cell}은 유효한 형식의 전화번호가 아닙니다.\n";
}

$pattern_02 = "/^[[:digit:]]{2,3}\-[[:digit:]]{3,4}\-[[:digit:]]{4}/";

if (preg_match($pattern_02, $tel, $matches_03)) {
    var_dump($matches_03);
} else {
    echo "{$tel}은 유효한 형식의 전화번호가 아닙니다.\n";
}
if (preg_match($pattern_02, $cell, $matches_04)) {
    var_dump($matches_04);
} else {
    echo "{$cell}은 유효한 형식의 전화번호가 아닙니다.\n";
}
?>