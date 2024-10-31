<?php
session_start();

// ตรวจสอบว่ามีลำดับคิวในเซสชันหรือไม่
if (!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = 0; // เริ่มต้นลำดับคิวที่ 0
}

// แสดงลำดับคิวปัจจุบัน
$currentQueue = $_SESSION['queue'];
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลำดับคิว</title>
</head>
<body>
    <h1>ลำดับคิวปัจจุบัน: <?php echo $currentQueue; ?></h1>
    <p>กดปุ่มด้านล่างเพื่อดูลำดับคิวถัดไป</p>
    <button onclick="location.href='next_queue.php'">ดูลำดับคิวถัดไป</button>
</body>
</html>
