<form method="get" action="">

<label>Staff Position ID<input type="text" name="SP_ID"/> </label><br>
<label>ชื่อตำแหน่ง<input type="text" name="SP_Name"/> </label><br>
<label>รายได้ต่อวัน<input type="text" name="SP_Salary"/> </label><br>
<label>หน้าที่<input type="text" name="SP_Duty"/> </label><br>


<input type="hidden" name="controller" value="staffposition"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addStaffposition"> Save</button>
</form>