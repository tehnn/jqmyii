การติดตั้ง
=====

1) สร้างโฟร์เดอร์ themes/jqm-ios <br>
2) นำโฟร์เดอร์ ios-inspired และ views ไปไว้ใน themes/jqm-ios<br>
3) แก้ไข protected/config/main.php<br>
  return array(<br>
    ...<br>
    'theme' => 'jqm-ios',<br>
    ...<br>
  )<br>

4) ตัวอย่าง controller ดูได้ที่ SiteController.php
