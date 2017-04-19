<?php
$con = mysql_connect("localhost","root",""); //ประกาศตัวแปรชื่อ con เก็บค่าการเชื่อมต่อฐานข้อมูล ผ่านทาง localhost ชื่อผู้ใช้ root รหัสผ่าน root
mysql_select_db("project",$con); // เลือกฐานข้อมูลในระบบ DB เป็น user แล้วสั่งเชื่อมต่อฐานข้อมูล
mysql_query("SET NAMES utf8"); // สั่งการเชื่อมต่อฐานข้อมูลเป็นภาษา UTF8
?>
