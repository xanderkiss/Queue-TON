<?php
session_start();

// เพิ่มลำดับคิว
if (!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = 0; // เริ่มต้นลำดับคิวที่ 0
}

// เพิ่มลำดับคิว
$_SESSION['queue']++;

// เปลี่ยนเส้นทางกลับไปที่ไฟล์แสดงลำดับคิว
header("Location: queue.php");
exit();
?>
