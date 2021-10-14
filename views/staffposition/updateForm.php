<form method="get" action="">

<label>ชื่อตำแหน่งงาน<input type="text" name="SP_Name"/> </label><br>
<label>รายได้ต่อวัน<input type="text" name="SP_Salary"/> </label><br>
<label>หน้าที่<input type="text" name="SP_Duty"/> </label><br>

<input type="hidden" name="controller" value="staffposition"/>
<input type="hidden" name="ID" value="<?php echo $staffposition->SP_ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>
</form>