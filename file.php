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


    // 파일 쓰기 예제

    $name = $_POST["name"];          // 전송받은 데이터 대입
    $gender = $_POST["gender"];
    $email = $_POST["email"];


    echo "이름 : ".$name."<br/>";    // 데이터 출력
    echo "성별 : ".$gender."<br/>";
    echo "이메일 : ".$email;

    $fp = fopen("list.txt", 'a');    // list.txt 파일을 쓰기 전용으로 열고 반환된 파일 포인터를 $fp에 저장.

    $str = $name."\t".$gender."\t".$email."\n";
    fwrite($fp, $str);               // list.txt 파일에 $str 변수를 저장함.

    fclose($fp);                     // list.txt 파일 닫음.

    echo "회원 등록 완료";

    // 파일 존재 여부 확인
    if(file_exists("list.txt"))
        echo "파일이 존재합니다.";
    else
        echo "파일이 존재하지 않습니다.";

    // 파일 크기 확인
    echo filesize("list.txt");
?>