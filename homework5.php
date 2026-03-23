<?php error_reporting(0); ?>
<html>
<head>
    <meta charset="utf-8">
    <title>Homework 3-5 : Calendar</title>
</head>
<body>

    <h2>Homework 3-5 : Calendar</h2>

    <form method="post">
        년(Year): <input type="text" name="year" value="<?php echo $_POST['year']; ?>"> 
        월(Month): <input type="text" name="month" value="<?php echo $_POST['month']; ?>">
        <input type="submit" value="달력보기">
    </form>

    <?php
        $year = $_POST["year"];
        $month = $_POST["month"];

        if($year && $month) {
            // 1일의 요일 구하기 (0:일, 1:월, ..., 6:토)
            $start_day = date('w', mktime(0, 0, 0, $month, 1, $year));
            // 해당 월의 총 일수 구하기 (28, 30, 31 등)
            $total_days = date('t', mktime(0, 0, 0, $month, 1, $year));
    ?>

    <table border="1" bordercolor="blue" width="500" cellpadding="5" style="border-collapse:collapse; text-align:center;">
        <tr bgcolor="#ADD8E6">
            <td colspan="7"><b><?php echo $year; ?>년 <?php echo $month; ?>월 달력</b></td>
        </tr>
        <tr bgcolor="pink">
            <td color="red">일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td color="blue">토</td>
        </tr>

        <tr>
        <?php
            // 1일이 시작되기 전까지 빈 칸 출력
            for ($i = 0; $i < $start_day; $i++) {
                echo "<td>&nbsp;</td>";
            }

            // 1일부터 마지막 날까지 숫자 출력
            for ($day = 1; $day <= $total_days; $day++) {
                echo "<td>$day</td>";
                $i++;

                // 7칸(토요일)이 차면 줄바꿈
                if ($i % 7 == 0 && $day < $total_days) {
                    echo "</tr><tr>";
                }
            }

            // 마지막 날 이후 남은 칸 빈 칸으로 채우기
            while ($i % 7 != 0) {
                echo "<td>&nbsp;</td>";
                $i++;
            }
        ?>
        </tr>
    </table>

    <?php } ?>

</body>
</html>