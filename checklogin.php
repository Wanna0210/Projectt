<?php
session_start();
include("connect.php");
/*
* 1=Admin
* 2=user
* 3=boss
*/
// variable
$username = $_POST['username'];
//ประกาศตัวแปรชื่อ username โดยการรับค่ามาจากกล่อง username ที่หน้า Login
$password = md5($_POST['password']);
//ประกาศตัวแปรชื่อ password โดยการรับค่ามาจากกล่อง password ที่หน้า Login
if($username == '') {
echo "คุณยังไม่ได้กรอกชื่อผู้ใช้ครับ";
} else if($password == '') {
echo "คุณยังไม่ได้กรอกรหัสผ่านครับ";
} else {                                               //ถ้ากรอกข้อมูลทั้งหมดแล้วให้ทำงานดังนี้
$sql = mysql_query("SELECT * FROM user_nrm WHERE username ='$username' and password ='$password' ");

$num = mysql_num_rows($sql);
	if($num <= 0){
	echo "Username หรือ Password อาจจะผิดกรุณา Login ใหม่อีกครั้ง <br /><a href='log-in.php'>Back</a>";
} else {
	while ($username = mysql_fetch_array($sql)) {
	//Admin case
	if($username['status'] == 1)
	{

	$_SESSION['session_id'] = session_id();
	$_SESSION['username'] = $username['username'];
	$_SESSION['status'] = 1;
	// ส่งค่า admin
	echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
} else if($username['status'] == 2)
{

$_SESSION['session_id'] = session_id();
$_SESSION['username'] = $username['username'];
$_SESSION['status'] = 2;
// ส่งค่า boss
echo "<meta http-equiv='refresh' content='1;URL=indexboss.php'>";
															}
													}
										}



										}

?>
