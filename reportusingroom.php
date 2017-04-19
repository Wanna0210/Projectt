<?php
include("head.php");
?>

<body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=”col-lg-6”>
                <h1> โรงเรียนพัฒนาศาสตร์มูลนิธิ  </h1></div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<br>
    <div class="row">

      <table width="100%">   <td> <h1 class="page-header"><i class="fa fa-plus-square custom" style="font-size:36px"></i> รายงานข้อมูลนักเรียนที่ใช้บริการห้องพยาบาล&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
  </table
    </div>

    <div class="container">
        <center>
        <h3> <label for="month">ช่วงเวลา</label>

<select name="month" id="month" >
	<option value = "1">มกราคม</option>
	<option value = "2">กุมภาพันธ์</option>
	<option value = "3">มีนาคม</option>
	<option value = "4">เมษายน</option>
	<option value = "5">พฤษภาคม</option>
	<option value = "6">มิถุนายน</option>
	<option value = "7">กรกฎาคม</option>
	<option value = "8">สิงหาคม</option>
	<option value = "9">กันยายน</option>
	<option value = "10">ตุลาคม</option>
	<option value = "11">พฤศจิกายน</option>
	<option value = "12">ธันวาคม</option>
</select>

<select id="year" name="year">
  <script>
  var myDate = new Date();
  var year = myDate.getFullYear()+543;
  for(var i = 2550; i < year+1; i++){
	  document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>
</select>

-
<select name="month" id="month" >
	<option value = "1">มกราคม</option>
	<option value = "2">กุมภาพันธ์</option>
	<option value = "3">มีนาคม</option>
	<option value = "4">เมษายน</option>
	<option value = "5">พฤษภาคม</option>
	<option value = "6">มิถุนายน</option>
	<option value = "7">กรกฎาคม</option>
	<option value = "8">สิงหาคม</option>
	<option value = "9">กันยายน</option>
	<option value = "10">ตุลาคม</option>
	<option value = "11">พฤศจิกายน</option>
	<option value = "12">ธันวาคม</option>
</select>
<select id="year" name="year">
  <script>
  var myDate = new Date();
  var year = myDate.getFullYear()+543;
  for(var i = 2550; i < year+1; i++){
	  document.write('<option value="'+i+'">'+i+'</option>');
  }
  </script>
</select>
</h3>
        </center>
    </div>





            <br>
            <center>

                <button type="button" class="btn btn-primary" name="print" value="print" >พิมพ์</button> &nbsp; &nbsp;&nbsp;&nbsp;
                <a href="index.php"><button type="button" class="btn btn-primary" name="back" value="back">ย้อนกลับ</button></a>

        </div>
      </center>
<br><br>




        <!-- เส้นtable    <  <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
        </style> -->



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
