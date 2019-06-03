
<!-- <html>
<body>
    <form action="request.php" method="post">
        이름 : <input type="text" name="name"><br>
        이메일 : <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html> -->

<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    echo $name."님의 이메일 주소는 ".$email."입니다.";

    // 폼 필수 입력 검증
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 이름에 대한 필수 입력 검증
        if (empty($_POST["name"])) {
            $nameMsg = "이름을 입력해 주세요!";
        } else {
            $name = $_POST["name"];
        }
        // 성별에 대한 필수 입력 검증
        if (!isset($_POST["gender"]) || $_POST["gender"]==false) {
            $genderMsg = "성별을 선택해 주세요!";
        } else {
            $gender = $_POST["gender"];
        }
        $email = $_POST["email"];
        $website = $_POST["website"];
    
        // 관심 있는 분야에 대한 필수 입력 검증
        if (empty($_POST["favtopic"])) {
            $favtopicMsg = "하나 이상 골라주세요!";
        } else {
            $favtopic = $_POST["favtopic"];
        }
        $comment = $_POST["comment"];
    }

    // 폼 입력 형식 검증
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameMsg = "이름을 입력해 주세요!";
        } else {
            $name = $_POST["name"];
            // 이름의 입력 형식 검증
        if (!preg_match("/^[a-zA-Z가-힣 ]*$/", $name)) {
                $nameMsg = "영문자와 한글만 가능합니다!";
            }
        }
        if (empty($_POST["email"])) {
            $emailMsg = "";
        } else {
            $email = $_POST["email"];
            // 이메일의 입력 형식 검증
             if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailMsg = "이메일을 정확히 입력해 주세요!";
            }
        }
        if (empty($_POST["website"])) {
            $websiteMsg = "";
        } else {
            $website = $_POST["website"];
            // 홈페이지 URL 주소의 입력 형식 검증
              if (!filter_var($email, FILTER_VALIDATE_URL)) {
                $websiteMsg = "홈페이지의 주소를 정확히 입력해 주세요!";
            }
        }
    }
    
    
?>