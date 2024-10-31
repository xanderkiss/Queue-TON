<?php
    header("Cache-Control: no-cache, must-revalidate"); // ป้องกันการแคช
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // ตั้งวันหมดอายุในอดีต

    // อ่านค่าคิวปัจจุบันจากไฟล์ queue.json
    $data = json_decode(file_get_contents('queue.json'), true);
    $data['queue'] += 1; // เพิ่มลำดับคิวทีละ 1

    // อัปเดตไฟล์ queue.json
    file_put_contents('queue.json', json_encode($data));

    // ส่งค่า queue กลับไปที่หน้า control.html
    header('Content-Type: application/json');
    echo json_encode($data);
?>
