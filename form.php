
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
?>