<?php
include("head.php");
?>

<body>
    <div class="row">
        <table width="100%">
            <td>
                <h1 class="page-header"><i class="fa fa-plus-square custom" style="font-size:36px"></i> ประเภทยา&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td>
            <td>  <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font ></td>
           <small></small>
                </h1>
        </table>
      </div>

        <div class="container">
            <form name="form1" method="post" action="" OnReset="JavaScript:fncAlert();"><!--ล้างข้อมูล-->
			           <form name="addtypemed" method="post" action="addmedsave.php">
                   <center>

						<div class="col-md-12 portfolio-item"></div>

                </center>
                <table class="table table-striped table-bordered table table-hover" id="mydata">
                  <thead>
                      <tr>
                        <th>รหัสประเภทยา</th>
                          <th>ชื่อประเภท/อุปกรณ์ปฐมพยาบาล</th>

                      </tr>
                  </thead>
                  <tfoot>
                  </tfoot>
                  <tbody><center>
                    <tr>
                      <td>C01</td>
                      <td>ยาสามัญ</td>
                    </tr>
                    <tr>
                      <td>C02</td>
                      <td>อุปกรณ์ปฐมพยาบาล</td>
                    </tr>
                    <tr>
                      <td>C03</td>
                      <td>เวชภัณ์</td>
                    </tr>
                    <tr>
                      <td>C04</td>
                      <td>อุปกรณ์ปฐมพยาบาล</td>
                    </tr>
                  </tbody></center>
            </table>
        </div>


        <div class="row">
            <h1 class="page-header"><i class="material-icons" style="font-size:36px">add_circle</i> เพิ่มข้อมูลยา</h1>
            <div class="container">
                <center>
                    <div class="col-md-6" style=";">
                        <h:body>
                            <h:form>
                                <table width="80%">
                                    <tr>
                                        <td valign="top">
                                            <h4>ประเภทยา :</td>
                          <td colspan="2"><select class="form-control" id="sel1">
                            <option value="volvo">เลือกประเภทยา</option>
                            <option value="C1">C1 ยาสามัญ</option>
                            <option value="C2">C2 ยาภายนอก</option>
                            <option value="C3">C3 อุปกรณ์ปฐมพยาบาล</option>
                                          </select>



</h4></td>


                                    </tr>


                                    <tr>
                                        <td valign="top">
                                            <h4>  รหัสยา : </td>
                          <td colspan="2"><input type="text" name="id_med" value="" size="1" maxlength="10" disabled="disabled" /> - <input type="text" name="name_med" value="" size="20" maxlength="30"/> </h4></td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <h4>ชื่อยา :</td>
                            <td colspan="2"><input type="text" name="name_med" value="" size="28" maxlength="30"/></h4></td>

                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <h4>วันหมดอายุ :&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
                                        <td colspan="2">
                                          <input type="text" id="datetimepicker2"/>
                                        </td>
                                    </tr>

</div>
                    </div>
                    </table>


<!--<div class="form-group"><input type="date" id="birthDate" class="form-control"></div>-->



                    <table width="80%">
                        <tr>
                            <td valign="top">
                                <h4>ขนาดบรรจุภัณฑ์ :</td>
                          <td colspan="1"><input type="text" name="name_med" value="" size="5" maxlength="4"/></h4></td>
                            <td><select class="form-control" name="prov2" id="prov2" data-width="fit">
                                  <option value="หน่วย">หน่วย</option>
                                  <option value="กล่อง">กล่อง</option>
                                  <option value="กระปุก">กระปุก</option>
                                  <option value="ขวด">ขวด</option>
                                  <option value="แผง">แผง</option>
                                  <option value="สมุทรปราการ">แผ่น</option>
                                </select></td>
                            <td>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>




                        <tr>
                            <td ALIGN=left valign="top">
                                <h4>บรรจุ :</td>
                                      <td colspan="1"><input type="text" name="name_med" value="" size="5" maxlength="4"/></h4> </td>
                            <td>
                                <select class="form-control" name="prov2" id="prov2">
                                  <option value="">หน่วย</option>
                                  <option value="กล่อง">กล่อง</option>
                                  <option value="กระปุก">กระปุก</option>
                                  <option value="ขวด">ขวด</option>
                                  <option value="แผง">แผง</option>
                                  <option value="สมุทรปราการ">แผ่น</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top"><h4>คงเหลือ :</td>
								<td><input type="text" name="name_med" value="" size="5" maxlength="4"/></h4></td>
								<td>
										<select class="form-control" id="sel1">
													<option value="">หน่วย</option>
													<option value="กล่อง">กล่อง</option>
													<option value="กระปุก">กระปุก</option>
													<option value="ขวด">ขวด</option>
													<option value="แผง">แผง</option>
													<option value="สมุทรปราการ">แผ่น</option>
                                      	</select>


								</td>
                        </tr>


                    </table>
                    </h:form>
                    </h:body>
            </div>


            <div class="col-md-6" style=";">
                <h:body>
                    <h:form>
                        <table>
                            <tr>
                                <td valign="top">วิธีใช้ :</td>
                                <td><textarea name="text" rows="12" cols="40" wrap="physical"></textarea></td>
                            </tr>
                              <td><br></td>
                            <tr>
                                <td valign="top">สรรพคุณ :</td>
                                <td><textarea name="text" rows="15" cols="30" wrap="physical"></textarea></td>
                            </tr>
                            <td><br>   </td>
                            <tr>
                                <td valign="top">คำเตือน :</td>
                                <td><textarea name="text" rows="12" cols="30" wrap="physical"></textarea></td>
                            </tr>
                            <td><br>   </td>
                            <tr>
                                <td valign="top">หมายเหตุ :&nbsp;</td>
                                <td><textarea name="text" rows="5" cols="40" wrap="physical"></textarea></td>
                            </tr>
                        </table>
                    </h:form>
                    <br><br>
                </h:body>
                </center>
            </div>
            <br>
            <center>

                <script language="javascript">
                </script>

                <button type="button" class="btn btn-success btn-sm" name="save" value="save"><span class = "glyphicon glyphicon-ok"></span> บันทึก</button> &nbsp;
                <button type="reset" class="btn btn-danger btn-sm" name="reset" value="Reset"><span class = "glyphicon glyphicon-remove"></span> ล้าง</button> &nbsp;
                <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>
                </form>
        </div>
			</center>
        <br><br>



<!--        <style>
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




  </form>
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

$('#datetimepicker2').datetimepicker({
	yearOffset:0,
	lang:'th',
	timepicker:false,
	format:'d/m/Y',
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
        "bLengthChange": false
        "dataTables_info": false
      });
    });

    </script>


</html>
