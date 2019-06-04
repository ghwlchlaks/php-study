<?php 
    // 파일 읽기 : fopen() 함수를 이용하여 파일을 연 후에는 데이터를 읽어 올 수 있습니다.
    // fgets() 함수 : 해당 파일에서 데이터를 한번에 한 줄 씩 읽어 들입니다. 이 함수는 파일 포인터가 파일에 끝에 도달하거나 , 줄 바꿈 문자를 만날 때까지 계속 수행합니다. feof() 함수는 전달받은 파일 포인터가 파일의 끝에 도달하면, true를 반환합니다.
    $fp = fopen("list.txt", 'r');    // list.txt 파일을 읽기 전용으로 열고 반환된 파일 포인터를 $fp에 저장함.

    while(!feof($fp)){               // 파일의 끝까지
        $member = fgets($fp);        // 한 줄씩 $member 변수에 저장하고 
        echo $member."<br>";         // 출력함.
    }

    //     fgetc() 함수
    // fgetc() 함수는 해당 파일에서 데이터를 한 번에 한 글자씩 읽어 들입니다.

    // 이 함수는 전달받은 파일 포인터가 가리키는 문자를 반환합니다.

    $fp = fopen("list.txt", 'r');    // list.txt 파일을 읽기 전용으로 열고 반환된 파일 포인터를 $fp에 저장함.

    while(!feof($fp)){               // 파일의 끝까지
        $char = fgetc($fp);          // 한 글자씩 $char 변수에 저장하고

        if($char == "\n")            // 출력함.
            $char = "<br>";

        if(!feof($fp))
            echo $char;
    }
?>