<form method="get" action="">

<label>ชื่อจริง<input type="text" name="S_FName"/> </label><br>
<label>นามสกุล<input type="text" name="S_LName"/> </label><br>
<label>วันเกิด (ปี/เดือน/วันที่)<input type="date" name="S_DoB"/> </label><br>

<input type="hidden" name="controller" value="staff"/>
<input type="hidden" name="ID" value="<?php echo $staff->S_ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>
</form>