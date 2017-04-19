<?php
include("head.php");
?>

<body>
    <div class="row">
<center>
        <table width="100%">
            <td>
                <h1 class="page-header"><i class="fa fa-plus-square custom" style="font-size:36px"></i> ข้อมูลการรักษา&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
        </table </div>

        <div class="container">
            <form name="form1" method="post" action="" OnReset="JavaScript:fncAlert();"><!--ล้างข้อมูล-->
			<form name="addtypemed" method="post" action="addmedsave.php">
</table>
              <table style="width:80%">
						<tr><td><h4>รหัสนักเรียน : </td><td><input type="text" name="id_student" value="" size="20" maxlength="10"/></td></h4>
						<td><h4> วันที่เข้ารับการรักษา : </td><td><input id="datetimepicker" type="text" ></h4>   </td>
           </tr>
           <tr>
						<br><td><h4>ชื่อ : </h4> </td><td><input type="text" name="id_med" value="" size="20" maxlength="20" disabled="disabled"></td>
            <td colspan="2" valign="top"><h4>สถานะ :
       <form><label class="radio-inline"><input type="radio" name="sleep" id="sleep">นอน</label>
            <label class="radio-inline"><input type="radio" name="sleepless" id="sleepless">ไม่นอน</label>
            <label class="radio-inline"><input type="radio" name="hospital" id="hospital">ส่งโรงพยาบาล</label></h4></td>
 </h4>
          </form></h4></tr>
          <tr>
            <td><h4>คาบเรียน : </td><td><input type="text" name="class" value="" size="1" maxlength="1"/> - <input type="text" name="toclass" value="" size="1" maxlength="1"/></h4></td>
          </tr>

</table>
</center>
        </div>
        <div class="row">
            <h1 class="page-header"><i class="material-icons" style="font-size:36px">add_circle</i> รายละเอียด</h1>
            <div class="container">
                <center>
                    <div class="col-md-7" style=";">

                        <h:body>
                            <h:form>
                                <table width="70%">
                                    <tr>
                                        <td>
                                            <h4>อาการ :</td>
                          <td colspan="2"><div class="col-xs-6"><select class="form-control" id="sel1">
                            <option value="select">เลือกอาการ</option>
                            <option value="head">ปวดหัว</option>
<option value="cool">เป็นไข้</option>
<option value="volvo">ปวดท้อง</option>
<option value="volvo">ปวดท้องประจำเดือน</option>
</select></div>&nbsp; &nbsp;&nbsp;&nbsp;



</h4>  </td>
</tr>
<tr>

                                        <td valign="top">
                                            <h4>  รหัสยา : </td>
                          <td colspan="2"><input type="text" name="id_med" value="" size="3" maxlength="10"/> - <input type="text" name="name_med" value="" size="20" maxlength="30"/> </h4></td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <h4>ชื่อยา :</td>
                            <td colspan="2"><input type="text" name="name_med" value="" size="28" maxlength="30"/></h4></td>

                          </tr>  </center>


                                      <table width="70%">
                                        <tr>
                                            <td valign="top"><h4>คงเหลือ :</td>
                                    <td><input type="text" name="name_med" value="" size="1" maxlength="4"/></h4></td>
                                    <td>
                                    <select class="form-control" id="sel1">
                                          <option value="">หน่วย</option>
                                          <option value="กล่อง">กล่อง</option>
                                          <option value="กระปุก">กระปุก</option>
                                          <option value="ขวด">ขวด</option>
                                          <option value="แผง">แผง</option>
                                          <option value="สมุทรปราการ">แผ่น</option>
                                                        </select>


                                    </td><td>&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        </tr>
                                  </table>

</div>
                    </div>

                    </table>
  <center>



                    </center>
</div>

<!--<div class="form-group"><input type="date" id="birthDate" class="form-control"></div>-->





                    </h:form>
                                  </h:body>


            <br>

            <center>
                <div class="container" >
            <div class="col-md-12 portfolio-item">
              <table class="table table-striped table-bordered table table-hover" id="mydata" Align="center">
                <thead>
                    <tr>
                      <th>ลำดับ</th>
                        <th>อาการ</th>
                          <th>รหัสยา</th>
                            <th>ชื่อยาที่ใช้รักษา</th>
                            <th>จำนวนยา</th>
                              <th>หน่วย</th>

                    </tr>
                </thead>
                <tfoot>
                </tfoot>
                <br>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>ปวดหัว</td>
                    <td>C02-01</td>
                    <td>Paracetamon</td>
                    <td>2</td>
                    <td>เม็ด</td>
                  </tr>

                </tbody>
              </table>
              </div>
</div>
              <br>
                <script language="javascript">
                </script>

                <button type="button" class="btn btn-success btn-sm" name="save" value="save"><span class = "glyphicon glyphicon-ok"></span> บันทึก</button> &nbsp;
                <button type="reset" class="btn btn-danger btn-sm" name="reset" value="Reset"><span class = "glyphicon glyphicon-remove"></span> ล้าง</button> &nbsp;
                <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>
                </form>
        </div>
			</center>
        <br><br>




  <!--<style>
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

<!--date-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="่js/datejquery.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('th');

$('#datetimepicker').datetimepicker({
	yearOffset:0,
	lang:'th',
	//timepicker:false,
	format:'d/m/Y:H:i',
	formatDate:'Y/m/d',
	minDate:'-1970/01/0', // yesterday is minimum date
	maxDate:'+1980/12/31' // and tommorow is maximum date calendar
});




</script>


<!--table-->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function() {
	$('#mydata').dataTable({
		"bLengthChange": false,
    "dataTables_info": false
			   "scrollY":  "320px",
    "scrollCollapse": false,
    "paging":         false

	});
});
</script>

</html>
