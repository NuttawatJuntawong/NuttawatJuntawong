<?php echo "<br> Are you sure to delete this Staff <br>
            <br> Staff ID: $staff->S_ID <br>ชื่อ - นามสกุล: $staff->S_FName $staff->S_LName <br>วันเกิด: $staff->S_DoB <br> <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="staff"/>
<input type="hidden" name="ID" value="<?php echo $staff->S_ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>