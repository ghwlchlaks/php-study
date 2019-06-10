<?php 
    // 쿠키 생성
    $cookieName = "city";

    $cookieValue = "서울";

    setcookie($cookieName, $cookieValue, time()+60, "/"); // 쿠키가 60초 간 지속됨.

    if(!isset($_COOKIE[$cookieName])) { // 해당 쿠키가 존재하지 않을 때

        echo "{$cookieName}라는 이름의 쿠키는 아직 생성되지 않았습니다.";

    } else {                            // 해당 쿠키가 존재할 때

        echo "{$cookieName}라는 이름의 쿠키가 생성되었으며, 생성된 값은 '".$_COOKIE[$cookieName]."'입니다.";

    }


?>