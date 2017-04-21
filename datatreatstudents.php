<?php
include("head.php");
?>

<body>
  <div class="row">
    <div class="col-4"> <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font ></div>

<ul class="breadcrumb">
<li>หน้าแรก</li>
<li><a href="index.php">Admin</a></li>
<li>ข้อมูลนักเรียน</li>
<li>ข้อมูลการรักษาทั้งหมด</li>
</ul>
  <div class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
     <div class="col-8">
  <h3 class="page-header"><i class="material-icons" style="font-size:36px">face</i> ข้อมูลการรักษาทั้งหมด </h3>
            </div>

            <div class="panel-body">

  <div class="container">
  <table class="table table-striped table-bordered table table-hover" id="mydata">
    <thead>
      <tr>
        <th>รหัสนักเรียน</th>
          <th>ชื่อ-สกุล</th>
          <th>ระดับชั้น</th>
          <th>วันที่:เวลาที่เข้าใช้</th>
          <th>สถานะ</th>
            <th>คาบเรียน</th>
          <th></th>
      </tr>
    </thead>
    <tfoot>

    </tfoot>
    <tbody><center>
      <tr>
        <td>5610513023</td>
        <td>วรรณาเจนสาคร</td>
        <td>มัธยมศึกษาปีที่6</td>
        <td>18/02/2017:13:12</td>
        <td>นอน</td>
        <td>5</td>
        <td><a href=index.php>แก้ไข<i class="material-icons" style="font-size:16px">mode_edit</i></a>
      <a href=index.php>รายละเอียด<i class="fa fa-eye" aria-hidden="true"></i></a></td>

      </tr>

    </tbody></center>
</table>


  </div>


        <br>
        <center>

             <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>

<br><br>
  </div>
</div></div></div></div>



  <!-- <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 5px;
                text-align: left;
            }
        </style> -->





</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
$('#mydata').dataTable();
</script>

</html>
