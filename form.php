
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
?>