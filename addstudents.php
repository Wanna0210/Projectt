<?php
include("head.php");
?>

<body>
    <div class="row">
        <table width="100%">
            <td>
                <h1 class="page-header">  <i class="material-icons" style="font-size:36px">person_add </i> เพิ่มมูลนักเรียน&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    </td><td>  <p align = right><font size = "2"><a href="logout.php"> log out</a></p></font >
      </td>     <small></small>
         </h1>
       </table> </div>


  <form name="form1" method="post" action="" OnReset="JavaScript:fncAlert();">  <!--ล้างข้อมูล-->
        <div class="container">



<table> <br>
                  <tr><td> <h4>รหัสนักเรียน :&nbsp; &nbsp;&nbsp;</h4></td><td colspan="2"><input type="text" name="id_student" value="" size="20" maxlength="10"/><br></td></tr>
<td><br></td>

<table>
                  <tr><td><h4>  คำนำหน้า : &nbsp;  &nbsp; &nbsp;&nbsp; </h4></td>
                    <td><div class="col-xs-13"><select class="form-control" name="tname" id="tname" data-width="fit">
<option value="master">เด็กชาย</option>
<option value="miss">เด็กหญิง</option>
<option value="mr">นาย</option>
<option value="ms">นางสาว</option>
</select></td><td><h4>&nbsp;  &nbsp;  ชื่อ : &nbsp;  <input type="text" name="fname" value="" size="20" maxlength="15"/>&nbsp; นามสกุล : &nbsp;
  <input type="text" name="lname" value="" size="20" maxlength="15"/></td></tr>

</table>
<td><br></td>
<table>
                  <tr><td><h4>  ระดับชั้น : &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </h4></td>
                    <td><div class="col-xs-13">
                        <select class="form-control" name="tname" id="tname" data-width="fit">
                              <option value="pratom">ประถมศึกษา</option>
                              <option value="mattayom">มัธยมศึกษา</option>
                        </select>
</td>
<td><h4>&nbsp; &nbsp;   ปีที่ : &nbsp;  </td><td><div class="col-xs-15">
    <select class="form-control" name="tname" id="tname" data-width="fit">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
    </select></td></tr>

</table>

  <table>
<td><br><br></td>

<tr>
        <td><h4>วันเกิด :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></td>
        <td colspan="2">
            <div class="form-group"><input type="date" id="birthday" name="birthday" class="form-control"></div></td>
            <td><h4>&nbsp;  &nbsp;  หมู่เลือด :&nbsp;
              <form action="">

                <label class="radio-inline">
 <input type="radio" name="inlineRadioOptions" id="O" value="option1"> O
</label>
<label class="radio-inline">
 <input type="radio" name="inlineRadioOptions" id="A" value="option2"> A
</label>
<label class="radio-inline">
 <input type="radio" name="inlineRadioOptions" id="B" value="B"> B
</label>
<label class="radio-inline">
 <input type="radio" name="inlineRadioOptions" id="AB" value="AB"> AB
</label>
<label class="radio-inline">
 <input type="radio" name="inlineRadioOptions" id="Other" value="Other"> อื่นๆ
</label>

          </form>
            </td>
</tr>
<tr><td><td></td><td></td></td></tr>
</table>

<table>
  <td><br></td>
<tr>
    <td valign="top"><h4>โรคประจำตัว :&nbsp;&nbsp;</h4></td>
    <td><textarea name="disease" rows="7" cols="40" wrap="physical"></textarea></td>
    <td valign="top"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แพ้ยา :&nbsp;&nbsp;</h4></td>
    <td><textarea name="intolerance" rows="7" cols="40" wrap="physical"></textarea></td>
</tr>

</table>
        </div>


<br><br><br><br><br><br>



                <script language="javascript"></script>
  <center>
    <button type="button" class="btn btn-success btn-sm" name="save" value="save"><span class = "glyphicon glyphicon-ok"></span> บันทึก</button> &nbsp;
    <button type="reset" class="btn btn-danger btn-sm" name="reset" value="Reset"><span class = "glyphicon glyphicon-remove"></span> ล้าง</button> &nbsp;
    <a href="index.php"><button type="button" class="btn btn-warning" name="back" value="back">ย้อนกลับ</button></a>

        </div>
        </center>
        <br>



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



</form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




</html>
