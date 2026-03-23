<?php error_reporting(0); // 처음 접속 시 뜨는 에러를 숨겨줍니다. ?>
<html>
<head><meta charset="utf-8"></head>
<body>

삼각형 : 밑변과 높이를 입력으로 받아서 면적을 출력한다. <br>
<form method="post" action="">
    밑변: <input type="text" name="width"><br>
    높이: <input type="text" name="height"><br>
    <input type="submit" value="제출">
</form>
밑변: <?php echo $_POST["width"]; ?><br>
높이: <?php echo $_POST["height"]; ?> <br>
면적: <?php echo $_POST["width"] * $_POST["height"] / 2; ?><br>

<br><br>

직사각형 : 가로와 세로를 입력으로 받아서 면적을 출력한다. <br>
<form method="post" action="">
    가로: <input type="text" name="width2"><br>
    세로: <input type="text" name="height2"><br>
    <input type="submit" value="제출">
</form>
가로: <?php echo $_POST["width2"]; ?><br>
세로: <?php echo $_POST["height2"]; ?> <br>
면적: <?php echo $_POST["width2"] * $_POST["height2"]; ?><br>

<br><br>

원 : 반지름을 입력으로 받아서 면적을 출력한다. <br>
<form method="post" action="">
    반지름: <input type="text" name="radius"><br>
    <input type="submit" value="제출">
</form>
반지름: <?php echo $_POST["radius"]; ?><br>
면적: <?php echo 3.14 * $_POST["radius"] * $_POST["radius"]; ?><br>

<br><br>

직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다. <br>
<form method="post" action="">
    가로: <input type="text" name="w3"><br>
    세로: <input type="text" name="l3"><br>
    높이: <input type="text" name="h3"><br>
    <input type="submit" value="제출">
</form>
체적: <?php echo $_POST["w3"] * $_POST["l3"] * $_POST["h3"]; ?><br>

<br><br>

원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다. <br>
<form method="post" action="">
    반지름: <input type="text" name="r4"><br>
    높이: <input type="text" name="h4"><br>
    <input type="submit" value="제출">
</form>
체적: <?php echo 3.14 * $_POST["r4"] * $_POST["r4"] * $_POST["h4"]; ?><br>

<br><br>

구 : 반지름을 입력으로 받아서 체적을 출력한다. <br>
<form method="post" action="">
    반지름: <input type="text" name="r5"><br>
    <input type="submit" value="제출">
</form>
체적: <?php echo (4/3) * 3.14 * $_POST["r5"] * $_POST["r5"] * $_POST["r5"]; ?><br>

</body>
</html>